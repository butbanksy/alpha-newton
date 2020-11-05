<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Professor;
use App\Models\Student;
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
        return view("admin/dashboard", ["etudiants"=>$etudiants, "professeurs"=>$professeurs]);
    }

    public function login()
    {
        return view("admin/login");
    }
}
