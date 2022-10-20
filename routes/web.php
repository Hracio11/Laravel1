<?php

use Illuminate\Support\Facades\Route;
// llamamos a todos los controladores que usemos
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\HoracioController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OficinaController;
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
    return view('welcome');
});

Route::get('/usuarios', function () {
    return "Aqui va los usuarios";
});

Route::get('/usuarios2',[UsuariosController::class,'listar']);

Route::get('/productos',[ProductoController::class,'listar']);

Route::get('/horacio',[HoracioController::class,'listar']);

Route::get('/clientes',[CustomerController::class,'listar']);

Route::get('/oficinas',[OficinaController::class,'listar']);