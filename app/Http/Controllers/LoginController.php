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
            return view('profe.index')->with('email',$email);
        }
        else if($consulta->rol == "Alumne"){
            return view('user.alumne')->with('email',$email);
            
        }
        else if($consulta->rol == "Centre"){

            //---------AIXO S'HA DE TORNAR A FER PERQUE ARA VOLEM MIRAR-HO A BBDD-----//
                                        //---------P03-----//
            /* $professors = [
                [
                     'id' => 1,
                     'nom' => 'Josep Oriol',
                     'email' => 'joseporiol@itic.bcn',
                     'curs' => 'DAW 2B',
                 ],
                 [
                    'id' => 2,
                     'nom' => 'Juanma',
                     'email' => 'juanmasanbel@itic.bcn',
                     'curs' => 'DAW 2A',
                 ],
                 [
                     'id' => 3,
                     'nom' => 'Faro',
                     'email' => 'jjfaro@itic.bcn',
                     'curs' => 'SMX 1B',
                 ]
                 ];
                 */
             return view('admin.index')->with('email',$email);
       
            }
        else{
            return view('user.error');
        }

        //return $consulta;    
    }
}
