<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function index(){

        $rolAlumne="Alumne";
        $consultaAlumne = Usuari::where('rol', $rolAlumne)->get();

        return View("professor.index");
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

        $rolAlumne="Alumne";
        $consultaAlumne = Usuari::where('rol', $rolAlumne)->get();

        return view("professor.index")-> with('llistaProf', $consultaAlumne);
        
    }
}
