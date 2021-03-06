<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Responsable;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

        $etudiant = Student::where('id', $etudiant->id)->with('person')->first();

        return view('success-student', ['etudiant' => $etudiant]);
    }



    public function streamPdf(Request $request)
    {
        $etudiant = Student::where('id', $request->id)->with('person')->first();
        $pdf = PDF::loadView(
            'pdf.inscription',
            ["data" => $etudiant],
            ['default_font' => 'dejavusans']
        );

        return $pdf->stream('inscription');
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
