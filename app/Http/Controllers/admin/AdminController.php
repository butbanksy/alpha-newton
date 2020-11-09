<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Professor;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;


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
        return view("admin/dashboard", ["etudiants" => $etudiants, "professeurs" => $professeurs]);
    }

    public function login()
    {
        return view("admin/login");
    }

    public function showStudents()
    {
        $etudiants = Student::with("person")->get();
        return view("admin/students/students-table", ["etudiants" => $etudiants]);
    }

    public function showStudent($locale, $id)
    {
        $etudiant = Student::find($id)->with(["person", "responsable", "subjects"])->first();

        return view("admin/students/student", ["etudiant" => $etudiant]);

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

    public function deleteProfessor($loacle, $id)
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
            'prix' => 'required|numeric']);

        Subject::create($request->all());

        return redirect("/fr/admin/subjects")->with(["message" => "Matière ajoutée avec succès"]);

    }

    public function addSubject(Request $request)
    {
        return view('admin/subjects/add-subject');
    }

    public function modifySubject(Request $request, $locale, $id){
        $subject = Subject::find($id);

        return view('admin/subjects/modify-subject', ["subject"=>$subject]);
    }

    public function deleteSubject($locale, $id)
    {
        Subject::destroy($id);

        return redirect("/fr/admin/subjects")->with(["message" => "Matière supprimée avec succès"]);

    }
}
