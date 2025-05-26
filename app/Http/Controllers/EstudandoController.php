<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudandoController extends Controller
{
    public function index()
    {
        $nome = "Eduardo";
    $idade = 22;


    $arr = [ 10,20,30,40,50];
    $nomes = ['Eduardo', 'Gustavo', 'Athilla', 'Joao'];

    return view('welcome',
    ['nome' => $nome,
    'idade' => $idade ,
     'profissao' => 'Programador',
     'arr' => $arr,
     'nomes' => $nomes,
    ]);
    }

    public function create() {
        return view('aula.create');
    }
}
