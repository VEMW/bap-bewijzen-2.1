<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FormController extends Controller
{


    public function showForm()
    {
        return view('forms.registration');
    }

    public function handleForm()
    {
        return "FORM AFHANDELING";
    }

    public function home(){
        return view('homepage');
    }
}
//    public function registratie(){
//        return view('forms.registration');
//    }
