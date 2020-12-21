<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class DynamicPDFController extends Controller
{
    public function filter()
    {
        $etudiants = Student::select('personne_id')->with('person:id,nom,prenom')->whereHas('subjects', function ($query) use (&$request) {
            return $query
            ->where('niveau', $this->niveau_scolaire)
            ->where('nom', $this->matiere);            
           
        })->get();
        return $etudiants;
    }
    
    function pdf($locale, Request $request)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_to_html($request->niveau_scolaire,$request->matiere));
        return $pdf->stream($request->niveau_scolaire,$request->matiere);    
    }
     
    public function convert_to_html (Request $request)
    {
        $etudiants = Student::with('person')->whereHas('subjects', function ($query) use (&$request) {
            return $query
            ->where('niveau', $request->input('niveau_scolaire'))
            ->where('nom', $request->input('matiere'));})
            ->get();

       $a ='<table id="table" data-toggle="table" data-pagination="true" data-locale="fr-FR" data-filter-control="true" data-search="true">
       <thead>
           <tr>
               <th data-sortable="true" data-field="id">ID</th>
               <th date-sortable="true" data-field="prenom">Prénom</th>
               <th date-sortable="true" data-field="nom">Nom</th>
               <th data-field="true">Abscent</th>
               <th data-field="true">Présent</th>
               
           </tr>
       </thead>
       <tbody>
           @foreach($etudiants as $etudiant)
           <tr>
               <td data-toggle="table" scope="row" class="id" id={{$etudiant->id}}>{{$etudiant->id}}</td>
               <td>{{$etudiant->person->nom}}</td>
               <td>{{$etudiant->person->prenom}}</td>
               <td class="text-right"></td>
               <td></td>
            
           </tr>
           @endforeach()

       </tbody>
   </table>';


        return $a;
    }
    

}
