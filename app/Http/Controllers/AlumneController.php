<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumneController extends Controller
{
    public function alumne(){
        $email = Request('email');
        $password = Request('password');
        //P01: $variablecontrolador = $v1;
        return view('user.alumne')->with('email',$email);
    }

}
