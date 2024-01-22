<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function index(){

        $consultaAlumne = Usuari::where('rol', "Alumne")->get();
        return View("professor.index")->with('consultaAlumne', $consultaAlumne);
    }

    function create(){
        return View("professor.create");
    }

    function createAlum(Request $request){

        $user = new Usuari;
        $user->id = $request->input('id');
        $user->nom = $request->input('nom');
        $user->cognoms = $request->input('cognoms');
        $user->password = $request->input('password'); 
        $user->email = $request->input('email');
        $user->rol = $request->input('rol');
        $user->actiu = $request->has('actiu');

        $user->save();

        return redirect()->route('prof.index');
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

        return view("prof.index")-> with('llistaProf', $consultaAlumne);
        
    }

    function delete($id){
        $user = Usuari::findOrFail($id);
        $user->delete();
        return redirect()->route('prof.index');
    
    }
}
