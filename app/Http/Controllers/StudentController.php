<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:mahasiswa');
    }

    public function index(){
        return view('pages.dashboard');
    }
    
    public function viewRules()
    {
        return view('pages/rules');
    }

    public function viewVote()
    {
        return view('pages/vote');
    }

    public function viewContestant()
    {
        return view('pages.menucontest');
    }


}
