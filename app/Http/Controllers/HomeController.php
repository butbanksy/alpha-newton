<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Student;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*
                $person = Person::create([
                    "nom" => "Mahmoud",
                    "prenom" => "Rhazzoul",
                    "date_naissance" => "1997/07/07",
                    "lieu_naissance" => "Safi",
                    "maladie_audition" => false,
                    "maladie_vue" => false,
                    "maladie_respiratoire" => false,
                    "maladie_specifique" => false,
                    "etablissement" => "ENSA",
                    "option" => "Systèmes et Réseaux informatiques",
                    "niveau_scolaire" => "4ème Année",
                    "email" => "mrhazzoul@gmail.com",
                    "telephone" => "0660004848",
                    "adresse" => "16, Rue Lisbonne, Safi"
                ]);

                $student = Student::create([
                    "personne_id" => $person->id,
                    "nouvel_etudiant" => true,
                    "redoublant" => false,
                ]);

                $responsable = Responsable::create([
                    "etudiant_id" => $student->id,
                    "prenom" => "Omar",
                    "nom" => "Rhazzoul",
                    "profession" => "Photographe",
                    "adresse" => "16, Rue Lisbonne, Quartier Industriel",
                    "telephone" => "0660004848",
                    "email" => "mrhazzoul@gmail.com",
                ]);
        */

<<<<<<< HEAD
        return view("home");
=======
       return view("home");
>>>>>>> 6b9783718f62efc07c7beb7b2f297badef0333b6

    }

    public function header()
    {
        return view("header");
    }

    public function inscription()
    {
        return view("inscription");
    }
}
