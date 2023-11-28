<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //CONTROLADOR DE LA PRACTICA
    public function professor(){
        $email = Request('email');
        $password = Request('password');
        //P01: $variablecontrolador = $v1;
        return view('user.professor')->with('email',$email);
    }

    public function alumne(){
        $email = Request('email');
        $password = Request('password');
        //P01: $variablecontrolador = $v1;
        return view('user.alumne')->with('email',$email);
    }

    public function centre(){
        $email = Request('email');
        $password = Request('password');
        //P01: $variablecontrolador = $v1;
        return view('user.centre')->with('email',$email);
    }

    public function error(){
        $email = Request('email');
        $password = Request('password');
        return view('user.error');
    }
}
