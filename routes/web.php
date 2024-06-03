<?php

use App\Http\Controllers\Cadastro;
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


use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formularios/login', [ LoginController::class, 'login']);


Route::get('/formularios/cadastro', [ CadastroController::class, 'cadastro']);