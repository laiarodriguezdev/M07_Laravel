<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuari;

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
        //P01: $variablecontrolador = $v1
        
        return view('user.centre')->with('email',$email);
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
        $email=Request('email');
        $password=Request('password');

        $consulta = Usuari::where('email', $email)->where('password', $password)->first();

        //--------------P02 + P03 + P04-----------------
        
        if($consulta->rol == "Professor"){
            $consultaAlumne = Usuari::where('rol', "Alumne")->get();
            return view('professor.index')->with(['email' => $email, 'consultaAlumne' => $consultaAlumne]);
        }
        else if($consulta->rol == "Alumne"){
            return view('user.alumne')->with('email',$email);
        }
        else if($consulta->rol == "Centre"){
            $consultaProfe = Usuari::where('rol', "Professor")->get();
            return view('admin.index')->with(['email' => $email, 'consultaProfe' => $consultaProfe]);
        }
        else{
            return view('user.error');
        }
    }
}
