<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Responsable;
use PDF;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index()
    {
        return view("form_etu/index");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'prenom' => 'required|min:3|max:30',
            'nom' => 'required|min:3|max:30',
            'date_naissance' => '',
            'lieu_naissance' => 'required|min:2|max:40',
            'adresse' => 'required|min:3',
            'telephone' => 'required|numeric',
            'email' => 'required|email',
            'niveau_scolaire' => 'required',
            'option' => 'required',
            'etablissement' => 'required',
            'maladie_specifique' => 'required',
            'maladie_respiratoire' => 'required',
            'maladie_vue' => 'required',
            'maladie_audition' => 'required',
        ]);

        $person = Person::create($request->all());

        /*
        
        //create an instance of etudiant_matieres for every matiere
        $subjects = $request->input('matiere_id');
        foreach($subjects as $subject){
           Subject::create([
               "etudiant_id" => $person->id,
               "matiere_id" => $subject
             ]);
        } 
         
        */    
        
        $responsable = Responsable::create([
            "etudiant_id" => $person->id,
            "prenom" => $request->first_name,
            "nom" => $request->last_name,
            "profession" => $request->profession,
            "adresse" => $request->adresse,
            "telephone" => $request->telephone,
            "email" => $request->email,
        ]);

        $pdf = PDF::loadView('pdf.professor',
            ["data" => $professor],
            ['default_font' => 'dejavusans']);
        return $pdf->stream('pdf');
    }

    public function pdf()
    {
        $pdf = PDF::loadView('pdf.professor',
            [], [], ["font-family"=>"XB Riyaz"]);

        return $pdf->stream('inscription.pdf');
    }
}


