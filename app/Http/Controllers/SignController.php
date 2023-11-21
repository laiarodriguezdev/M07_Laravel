<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    //CONTROLADOR DE LA PRACTICA
    public function signIn($v1, $v2, $v3, $v4){
        
        $variablecontrolador = 'hola ' . $v1 . ' ' . $v2 . ' ' . $v3 . ' ' . $v4;
        return view('sign.signin')->with('variablevista',$variablecontrolador);
    }

    public function signUp($v1, $v2, $v3){
        
        $variablecontrolador = 'hola ' . $v1 . ' ' . $v2 . ' ' . $v3 . ' ';
        return view('sign.signup')->with('variablevista',$variablecontrolador);
    }

}
