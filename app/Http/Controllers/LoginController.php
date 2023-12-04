<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*---------POST PERÒ SEPARAT------*/
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

         $professors = [
        [
            'id' => 1,
            'nom' => 'Josep Oriol',
            'email' => 'joseporiol@itic.bcn',
            'curs' => 2,
        ],
        [
            'id' => 2,
            'nom' => 'Juanma',
            'email' => 'juanmasanchezbel@itic.bcn',
            'curs' => 3,
        ],
        [
            'id' => 3,
            'nom' => 'Farito',
            'email' => 'jjfarorodriguez@itic.bcn',
            'curs' => 3,
        ]
        ];
        
        return view('user.centre')->with('email',$email)->with('professors', $professors);
    }

    /*---------ERROR------*/
    public function error(){
        $email = Request('email');
        $password = Request('password');
        return view('user.error');
    }

    /*---------LLOGICA DE NEGOCI------*/
    public function loginGeneral()
    {
        $email = Request('email');
        $password = Request('password');
        if($email === 'joseporiol@itic.bcn'){
            return view('user.professor')->with('email',$email);
        }
        else if($email === '2023_alumne@itic.bcn'){
            return view('user.alumne')->with('email',$email);
        }
        else if($email === '2023_secretaria@itic.bcn'){
            return view('user.centre')->with('email',$email);
        }
        else{
            return view('user.error');
        }
    }
}
