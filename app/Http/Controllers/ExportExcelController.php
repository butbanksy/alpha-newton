<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportExcelController extends Controller
{
    public function excel()
    {
        $etudiants = Student::with('person')->whereHas('subjects', function ($query) use (&$request) {
            return $query
            ->where('niveau', $request->input('niveau_scolaire'))
            ->where('nom', $request->input('matiere'));})
            ->get();

        
    }
    
    
}
