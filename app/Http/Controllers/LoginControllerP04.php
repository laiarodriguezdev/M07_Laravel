<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuari;


/*--------AQUEST CONTROLADOR S'UTILITZA A LA P04------*/

class LoginControllerP04 extends Controller
{
    public function mostrarDetalls($id)
    {

    }

    public function showLoginForm()
    {
        return view('sign.signin');
    }

    public function login(Request $request)
    {
        // Lògica per gestionar el login
    }

    public function showSignupForm()
    {
        return view('sign.signup');
    }

    public function signup(Request $request)
    {
        // Lògica per gestionar el signup
    }

    public function logout()
    {

    }
}
