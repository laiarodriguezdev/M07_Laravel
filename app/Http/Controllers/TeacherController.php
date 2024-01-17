<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function index(){

        $rolProfe="Professor";
        $consultaProfe = Usuari::where('rol', $rolProfe)->get();

        return View("professor.index")-> with('llistaProf', $consultaProfe);
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

        return View("professor.index")-> with('llistaProf', $consultaProfe);
        
    }
}
