<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerCepetz;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\AdminAuthController;

// Rotas públicas
Route::get('/', [NoticiaController::class, 'index'])->name('inicio');
Route::get('/cepetz/sobre', function () {return view('sobre'); })->name('sobre');
Route::get('/cepetz/equipe', function () {return view('equipe'); })->name('equipe');
Route::get('/cepetz/animais', function () {return view('animais'); })->name('animais');
Route::get('/cepetz/apoieSitio', function () {return view('apoieSitio'); })->name('apoieSitio');
Route::get('/cepetz/cinoterapia', function () {return view('cinoterapia'); })->name('cinoterapia');

// Rotas de autenticação admin
Route::get('/cepetz/cadastrarcomoadmin', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/cepetz/cadastrarcomoadmin', [AdminAuthController::class, 'register'])->name('admin.register.submit');
Route::get('/cepetz/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/cepetz/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/cepetz/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Rotas protegidas (apenas admin)
Route::middleware(['admin'])->group(function () {
    Route::get('/cepetz/cadastro', function () {return view('cadastrar'); })->name('cadastrar');
    Route::get('/cepetz/gerenciamento', [NoticiaController::class, 'gerenciar']);
    Route::delete('/cepetz/excluir/{id}', [NoticiaController::class, 'excluir']);
    Route::post('/cadastrarnoticia', [NoticiaController::class, 'store'])->name('cadastrarnoticia');
    Route::get('/editarnoticia/{id}', [NoticiaController::class, 'editar'])->name('editar');
    Route::post('/atualizarnoticia/{id}', [NoticiaController::class, 'atualizar'])->name('atualizarnoticia');
});