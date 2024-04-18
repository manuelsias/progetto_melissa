<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public  function home() { 
        return view('home');
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

    public function contattami(){
        return view('contattami');
    }
    public function info(){
        return view('info');
    }
    public function submit(Request $request){
        $name=$request->name;
        $email=$request->email;
        $body=$request->body;
        $user=compact('body','email','name');
       
        Mail::to('manuelsias97@gmail.com')->send(new ContactMail($user));

        return redirect(route('home'))->with('message','messaggio inviato');
    }
}
