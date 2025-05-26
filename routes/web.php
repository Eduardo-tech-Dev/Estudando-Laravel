<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudandoController;

Route::get('/', [EstudandoController::class, 'index']);
Route::get('/aula/create', [EstudandoController::class, 'create']);

Route::get('/contatos', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
