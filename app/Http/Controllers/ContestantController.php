<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContestantController extends Controller
{

    public function contestant_one(){
        return view('pages.contestant1');
    }

    public function rules(){
        return view('pages.rules');
    }
}
