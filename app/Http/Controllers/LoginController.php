<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //CONTROLADOR DE LA PRACTICA
    public function professor($v1){
        
        $variablecontrolador = $v1;
        return view('user.professor')->with('variablevista',$variablecontrolador);
    }

    public function alumne($v1){
        
        $variablecontrolador = $v1;
        return view('user.alumne')->with('variablevista',$variablecontrolador);
    }

    public function centre($v1){
        
        $variablecontrolador = $v1;
        return view('user.centre')->with('variablevista',$variablecontrolador);
    }
}
