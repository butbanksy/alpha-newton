<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Professor;
use App\Models\Student;

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

        return redirect("/fr/admin/students")->with(["message"=>"Etudiant(e) supprimé(e) avec succès"]);
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

        return redirect("/fr/admin/professeurs")->with(["message"=>"Professeur supprimé(e) avec succès"]);
    }
}
