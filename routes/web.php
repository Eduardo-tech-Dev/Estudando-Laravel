<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudandoController;

Route::get('/', [EstudandoController::class, 'index']);
Route::get('/aula/create', [EstudandoController::class, 'create']);
Route::get('/aula/{id}', [EstudandoController::class, 'show']);
Route::post('/aula', [EstudandoController::class, 'store']);


Route::get('/contatos', function () {
    return view('contact');
});

