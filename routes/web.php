<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\PrincipalController::class, 'index'])->name('home');
Route::get('/cadastro', [App\Http\Controllers\PrincipalController::class, 'cadastro'])->name('cadastro');
Route::post('/salvar', [App\Http\Controllers\PrincipalController::class, 'salvar'])->name('salvar');
Route::get('/alterar', [App\Http\Controllers\PrincipalController::class, 'alterar'])->name('alterar');
Route::get('/excluir', [App\Http\Controllers\PrincipalController::class, 'excluir'])->name('excluir');
Route::post('/atualizar', [App\Http\Controllers\PrincipalController::class, 'atualizar'])->name('atualizar');
