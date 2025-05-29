<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

USE App\Models\Aula;

class EstudandoController extends Controller
{
    public function index()
    {
        $aulas = Aula::all();

    return view('welcome', ['aulas' => $aulas]);
    }

    public function create() {
        return view('aula.create');
    }

    public function store(Request $request){

        $aula = new Aula();

        $aula->title = $request->title;
        $aula->private = $request->private;
        $aula->description = $request->description;

        $aula->save();

        return redirect('/');



    }
}
