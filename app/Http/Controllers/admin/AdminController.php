<?php

namespace App\Http\Controllers\admin;

use App;
use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Professor;
use App\Models\Responsable;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $etudiants = Student::with("person")->get();
        $professeurs = Professor::with("person")->get();
        $matieres = Subject::all();
        return view("admin/dashboard", ["etudiants" => $etudiants, "professeurs" => $professeurs, "matieres" => $matieres]);
    }

    public function login()
    {
        return view("admin/login");
    }

    public function changePassword()
    {
        return view("admin/account-settings");
    }

    public function updatePassword($locale, Request $request)
    {
        $validatedData = $request->validate([
            'currentPassword' => 'required',
            'password' => 'required|same:password',
            'passwordConfirmation' => 'required|same:password',

        ]);

        $id =  Auth::user()->id;

        if (Hash::check($request->input('currentPassword'), Auth::user()->password)) {
            $user = User::find($id);
            $user->password = Hash::make($request->input('password'));
            $user->save();

            return redirect()->back()->with(["success" => "Mot de passe modifié avec succès"]);
        } else {
            return redirect()->back()->with("error", "Le mot de passe actuel ne correspond pas avec l'ancien mot de passe.");
        }
    }

    public function excel_export()
    {
        return view("admin/students/excel_export");
    }

    public function export_pdf()
    {
        return view("admin/students/export_pdf");
    }


    public function showStudents()
    {
        $etudiants = Student::with("person")->get();
        return view("admin/students/students-table", ["etudiants" => $etudiants]);
    }

    public function filterStudents($locale, Request $request)
    {
        $etudiants = Student::with('person')->whereHas('subjects', function ($query) use (&$request) {
            return $query
                ->where('niveau', $request->input('niveau_scolaire'))
                ->where('nom', $request->input('matiere'));
        })
            ->get();

        return view("admin/students/students-table", ["etudiants" => $etudiants]);
    }

    public function printReceipt($locale, int $id)
    {
        $etudiant = Student::where('id', $id)->with("person")->first();
    
        $pdf = PDF::loadView(
            'pdf.inscription',
            ["data" => $etudiant],
            ['default_font' => 'dejavusans']
        );
        $pdf->stream('inscription.pdf');

    }

    function pdf($locale, Request $request)
    {
        $etudiants = Student::with('person')->whereHas('subjects', function ($query) use (&$request) {
            return $query
                ->where('niveau', $request->input('niveau_scolaire'))
                ->where('nom', $request->input('matiere'));
        })
            ->get();
        $pdf = \App::make('dompdf.wrapper');

        $matiere = $request->input('matiere');
        $a = '
        <a class="navbar-brand" style="margin:auto;"> <img src="../public/images/entete.png" height="150" width="700" /> </a><br><br>

        <p>Prof : ............................................................ &nbsp; &nbsp; Date :.........................................</p>
        <p>Matière : ...................................................... &nbsp; &nbsp; Niveau :.........................................</p>
        <table border="2" id="table" data-toggle="table" data-pagination="true" data-locale="fr-FR" data-filter-control="true" data-search="true">
       <thead>
           <tr>
               <th data-sortable="true" data-field="id">ID</th>
               <th date-sortable="true" data-field="prenom">Nom</th>
               <th date-sortable="true" data-field="nom">Prénom</th>
               <th data-field="true">Absent</th>
               <th data-field="true">Présent</th>

           </tr>
       </thead>
       <tbody>';

        foreach ($etudiants as $etudiant) {
            $person = $etudiant->person;
            $a = $a . "<tr>
               <td >$etudiant->id</td>
               <td>$person->nom</td>
               <td>$person->prenom</td>
               <td></td>
               <td></td>

           </tr>";
        }


        $a = $a . "  </tbody>
   </table>";

        //$pdf = PDF::loadView('pdf_view', $data);
        //return $pdf->download('medium.pdf');
        $pdf->loadHTML($a);
        return $pdf->stream();
    }


    public function export($locale, Request $request)
    {
        return Excel::download(new UsersExport($request->niveau_scolaire, $request->matiere), 'alphaNewton.xlsx');
    }

    public function showStudent($locale, $id)
    {
        $etudiant = Student::where('id', $id)->with(["person", "responsable", "subjects"])->first();

        return view("admin/students/student", ["etudiant" => $etudiant]);
    }

    public function modifyStudent($locale, $id)
    {
        $student = Student::where('id', $id)->with(["person", "responsable", "subjects"])->first();
        $matieres = Subject::all();

        return view("admin/students/modify-student", ["student" => $student, "matieres" => $matieres]);
    }

    public function deleteStudent($locale, $id)
    {
        Student::destroy($id);

        return redirect("/fr/admin/students")->with(["message" => "Etudiant(e) supprimé(e) avec succès"]);
    }


    //Professor methods

    public function showProfessors()
    {
        $professeurs = Professor::with("person")->get();
        return view("admin/professors/professors-table", ["professeurs" => $professeurs]);
    }

    public function showProfessor($locale, $id)
    {
        $professeur = Professor::where('id', $id)->with("person")->first();

        return view("admin/professors/professor", ["professeur" => $professeur]);
    }

    public function putStudent(Request $request, $locale, Student $student)
    {
        $validatedData = $request->validate([
            'prenom' => 'required|min:3|max:30',
            'nom' => 'required|min:3|max:30',
            'telephone' => 'required|numeric',
            'matiere_id' => 'array|min:1',
            /*
            'profession_resp' => 'min:3|max:30',
            'prenom_resp' => 'min:3|max:30',
            'nom_resp' => 'min:3|max:30',
            'telephone_resp' => 'numeric',
            'adresse_resp' => 'min:3',
            'lieu_naissance' => 'min:2|max:40',
            'adresse' => 'min:3',

            */

        ]);

        $person = Person::findOrFail($student->personne_id);
        $person->fill($request->except([' _token, _method, register']));

        $responsable = Responsable::where('etudiant_id', $student->id)->first();
        $responsable->fill([
            'nom' => $request->input('nom_resp'),
            'prenom' => $request->input('prenom_resp'),
            'adresse' => $request->input('adresse_resp'),
            'email' => $request->input('email_resp'),
            'profession' => $request->input('profession_resp'),
            'telephone' => $request->input('telephone_resp'),
        ]);
        $subjects = $request->input('matiere_id');
        $student->subjects()->detach();
        $student->subjects()->attach($subjects);
        $person->save();
        $responsable->save();
        $student->save();

        return redirect("/fr/admin/students")->with(["message" => "Etudiant(e) modifié(e) avec succès"]);
    }

    public function modifyProfessor($locale, $id)
    {
        $professor = Professor::where('id', $id)->with("person")->first();

        return view("admin/professors/modify-professor", ["professeur" => $professor]);
    }

    public function putProfessor(Request $request, $locale, Professor $professor)
    {
        $validatedData = $request->validate([
            'prenom' => 'required|min:3|max:30',
            'nom' => 'required|min:3|max:30',
            'telephone' => 'required|numeric',
            /*
            'date_naissance' => '',
            'lieu_naissance' => 'required|min:2|max:40',
            'adresse' => 'required|min:3',
            'niveau_scolaire' => 'required',
            'option' => 'required',
            'etablissement' => 'required',
            'maladie_specifique' => 'required',
            'maladie_respiratoire' => 'required',
            'maladie_vue' => 'required',
            'maladie_audition' => 'required',
            */
        ]);;

        $us = Person::findOrFail($professor->personne_id);

        $us->fill($request->except(['_token, _method, register']));
        $us->save();

        return redirect("/fr/admin/professeurs")->with(["message" => "Professeur modifié(e) avec succès"]);
    }

    public function deleteProfessor($locale, $id)
    {
        Professor::destroy($id);

        return redirect("/fr/admin/professeurs")->with(["message" => "Professeur supprimé(e) avec succès"]);
    }

    // Subjects

    public function showSubjects()
    {
        $subjects = Subject::all();
        return view("/admin/subjects/subjects", ["subjects" => $subjects]);
    }

    public function storeSubject(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|min:3|max:30',
            'prix' => 'required|numeric',
            'niveau' => 'required'
        ]);

        Subject::create($request->all());

        return redirect("/fr/admin/subjects")->with(["message" => "Matière ajoutée avec succès"]);
    }

    public function putSubject(Request $request, $locale, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required|min:3|max:30',
            'prix' => 'required|numeric',
            'niveau' => 'required'
        ]);

        $matiere = Subject::find($id);

        $matiere->nom = $request->input('nom');
        $matiere->prix = $request->input('prix');
        $matiere->niveau = $request->input('niveau');

        $matiere->save();

        return redirect("/fr/admin/subjects")->with(["message" => "Matière modifiée avec succès"]);
    }

    public function addSubject(Request $request)
    {
        return view('admin/subjects/add-subject');
    }

    public function modifySubject(Request $request, $locale, $id)
    {
        $subject = Subject::find($id);

        return view('admin/subjects/modify-subject', ["subject" => $subject]);
    }

    public function deleteSubject($locale, $id)
    {
        Subject::destroy($id);

        return redirect("/fr/admin/subjects")->with(["message" => "Matière supprimée avec succès"]);
    }
}
