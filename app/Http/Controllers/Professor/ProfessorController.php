<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Professor;
use Illuminate\Http\Request;
use PDF;

class ProfessorController extends Controller
{
    public function index()
    {
        return view("form_prof/index");
    }

    public function store(Request $request)
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
            ]);

        $person = Person::create($request->all());
        $professor = Professor::create([
            "personne_id" => $person->id
        ]);

        return view("success");

        /*
        $pdf = PDF::loadView('pdf.professor',
            ["data" => $professor],
            ['default_font' => 'dejavusans']);
        return $pdf->stream('pdf');
        */
    }

    public function pdf()
    {
        $pdf = PDF::loadView('pdf.professor',
            [], [], ["font-family" => "XB Riyaz"]);

        return $pdf->stream('inscription.pdf');
    }
}
