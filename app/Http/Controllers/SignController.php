<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuari;

class SignController extends Controller
{
    //CONTROLADOR DE LA PRACTICA P01
    /*
    public function signIn($v1, $v2, $v3, $v4){
        
        $variablecontrolador = 'hola ' . $v1 . ' ' . $v2 . ' ' . $v3 . ' ' . $v4;
        return view('sign.signin')->with('variablevista',$variablecontrolador);
    }

    public function signUp($v1, $v2, $v3){
        
        $variablecontrolador = 'hola ' . $v1 . ' ' . $v2 . ' ' . $v3 . ' ';
        return view('sign.signup')->with('variablevista',$variablecontrolador);
    }
    */

    public function signIn(){
        
        return view('sign.signin');
    }

    public function signUp(){
        return view('sign.signup');
    }


    /*-----P04 - FET DURANT LA P05 PER FER PROFESSORS I ALUMNES NOUS---*/
    public function createUser(Request $request){
        
        $user = new Usuari;
        $user->id = $request->input('id');
        $user->nom = $request->input('nom');
        $user->cognoms = $request->input('cognoms');
        $user->password = $request->input('password'); 
        $user->email = $request->input('email');
        $user->rol = $request->input('rol');
        $user->actiu = $request->has('actiu');

        $user->save();

        return redirect()->route('signin');
    }
}
