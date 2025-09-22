<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

Route::get('/', function () {
    return view('home', ['idade' => 18, 'fruta' => ['banana', 'maçã', 'laranja']]);
})->name('home');

Route::get('/pessoas', [PessoaController::class, 'index'])->name('pessoas.index');
Route::get('/pessoas/create', [PessoaController::class, 'create']);
Route::post('/pessoas', [PessoaController::class, 'store'])->name('pessoas.store');
Route::get('/pessoas/update', [PessoaController::class, 'edit']);
Route::post('/pessoas/update', [PessoaController::class, 'update'])->name('pessoas.edit');

