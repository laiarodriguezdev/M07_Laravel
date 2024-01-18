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
        return View("professor.create");
    }

    function edit($id){
        $consultaID = Usuari::find($id);
        return View("professor.edit")-> with('prof', $consultaID);
    }

    function store(Request $request){
        $usuari = new Usuari();
        $usuari -> nom = $request -> nom;

        $usuari -> save();

        $rolProfe="Professor";
        $consultaProfe = Usuari::where('rol', $rolProfe)->get();

        return view("professor.index")-> with('llistaProf', $consultaProfe);
        
    }
}
