<?php

use App\Http\Controllers\LivroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livros', [LivroController::class, 'index']);
Route::get('/livros/adicionar', [LivroController::class, 'create']);
Route::post('/livros', [LivroController::class, 'store']);