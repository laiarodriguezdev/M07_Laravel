<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuari;

class CentreController extends Controller
{
    function index(){

        $rolProfe="Professor";
        $consultaProfe = Usuari::where('rol', $rolProfe)->get();

        return View("admin.index");
    }

    function create(){
        return View("admin.create");
    }

    function edit($id){
        //DIFERNCIA ENTRE EDIT I UPDATE:

        //----------- A EDIT POTS VEURE QUINS VALORS TENIA L'USUARI A LA BBDD,
        //----------- A UPDATE, NO RECULLS LES DADES I LES SOBREESCRIUS DIRECTAMENT, A CEGUES. 

        $consultaID = Usuari::find($id);
        return View("admin.edit")-> with('prof', $consultaID);
    }

    function store(Request $request){
        $usuari = new Usuari();
        $usuari -> nom = $request -> nom;

        $usuari -> save();

        $rolProfe="Professor";
        $consultaProfe = Usuari::where('rol', $rolProfe)->get();

        return view("admin.index")-> with('llistaProf', $consultaProfe);
        
    }
}
