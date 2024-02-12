<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public  function welcome() { 
        return view('welcome');
    }

    public function chisono(){
        return view('chisono');
    }

    public function consulenze(){
        return view('consulenze');
    }

    public function yoga(){
        return view('yoga');
    }

    public function galleria(){
        return view('galleria');
    }
}
