<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerCepetz;
use App\Http\Controllers\NoticiaController;

Route::get('/', [NoticiaController::class, 'index'])->name('inicio');

Route::get('/cepetz/logar', function () {return view('logar'); })->name('logar');
Route::post('/logar', [controllerCepetz::class, 'logar'])->name('logarUsuario');

Route::get('/cepetz/sobre', function () {return view('sobre'); })->name('sobre');
Route::get('/cepetz/equipe', function () {return view('equipe'); })->name('equipe');
Route::get('/cepetz/animais', function () {return view('animais'); })->name('animais');

Route::get('/cepetz/apoieSitio', function () {return view('apoieSitio'); })->name('apoieSitio');
Route::get('/cepetz/cinoterapia', function () {return view('cinoterapia'); })->name('cinoterapia');

/* somente adm's */
Route::get('/cepetz/cadastro', function () {return view('cadastrar'); })->name('cadastrar');
Route::get('/cepetz/gerenciamento', [NoticiaController::class, 'gerenciar']);
Route::delete('/cepetz/excluir/{id}', [NoticiaController::class, 'excluir']);
Route::post('/cadastrarnoticia', [NoticiaController::class, 'store'])->name('cadastrarnoticia');
Route::get('/editarnoticia/{id}', [NoticiaController::class, 'editar'])->name('editar');
Route::post('/atualizarnoticia/{id}', [NoticiaController::class, 'atualizar'])->name('atualizarnoticia');
