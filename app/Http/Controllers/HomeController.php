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
        return view("home");
    }

    public function header()
    {
        return view("header");
    }

    public function inscription()
    {
        return view("inscription");
    }

    public function test()
    {
        return view("test");
    }
}
