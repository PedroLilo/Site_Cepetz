<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerCepetz;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/cepetz/logar', function () {return view('logar'); })->name('logar');
Route::post('/logar', [controllerCepetz::class, 'logar'])->name('logarUsuario');

Route::get('/cepetz/equipe', function () {return view('equipe'); })->name('equipe');
Route::get('/cepetz/animais', function () {return view('animais'); })->name('animais');
