<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $etudiants = Person::all();
        return view("admin/dashboard", ["etudiants"=>$etudiants]);
    }

    public function login()
    {
        return view("admin/login");
    }
}
