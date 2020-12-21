<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Responsable;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use PDF;

class StudentController extends Controller
{

    public function index()
    {
        $matieres = Subject::all();
        return view("form_etu/index", ["matieres" => $matieres]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'prenom' => 'required|min:3|max:30',
            'nom' => 'required|min:3|max:30',
            'telephone' => 'required|numeric',
            'prenom_resp' => 'required|min:3|max:30',
            'nom_resp' => 'required|min:3|max:30',
            'telephone_resp' => 'required|numeric',
            'matiere_id' => 'array|min:1'

            /*'profession_resp' => 'required|min:3|max:30',
            'option' => 'required',
            'adresse_resp' => 'required|min:3',
            'date_naissance' => 'required',
            'lieu_naissance' => 'required|min:2|max:40',
            'adresse' => 'required|min:3',
            'niveau_scolaire' => 'required',
            'etablissement' => 'required',
            'maladie_specifique' => 'required',
            'maladie_respiratoire' => 'required',
            'maladie_vue' => 'required',
            'maladie_audition' => 'required',
            */
        ]);

        $person = Person::create($request->all());

        $etudiant = Student::create([
            'personne_id' => $person->id,
            'redoublant' => true,
            'nouvel_etudiant' => false,
        ]);


        //create an instance of etudiant_matieres for every matiere
        $subjects = $request->input('matiere_id');
        $etudiant->subjects()->attach($subjects);


        $responsable = Responsable::create([
            "etudiant_id" => $etudiant->id,
            "prenom" => $request->prenom_resp,
            "nom" => $request->nom_resp,
            "profession" => $request->profession_resp,
            "adresse" => $request->adresse_resp,
            "telephone" => $request->telephone_resp,
            "email" => $request->email_resp,
        ]);

        $pdf = PDF::loadView(
            'pdf.inscription',
            ["data" => $etudiant],
            ['default_font' => 'dejavusans']
        );
        $pdf->stream('inscription.pdf');
    }

    public function pdf()
    {
        $pdf = PDF::loadView(
            'pdf.professor',
            [],
            [],
            ["font-family" => "XB Riyaz"]
        );

        return $pdf->stream('inscription.pdf');
    }

    public function getNiveau($local, $niveau)
    {
        $n = Subject::where("niveau", $niveau)->get();

        return \response()->json($n);
    }

}
