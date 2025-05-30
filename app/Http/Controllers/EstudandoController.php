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

        // Image upload

        if($request->hasFile('image') ** $request->file('image')->isValid()){


            $requestImage = $request->image;


            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." .$extension;

            $requestImage->move(public_path('img/aulas'), $imageName);

            $aula->image = $imageName;

        }

        $aula->save();

        return redirect('/')->with('msg', 'Aula criada com Sucesso!');



    }

    public function show($id) {
        $aula = Aula::findOrFail($id);

        return view('aula.show', ['aula' => $aula]);
    }
}
