<?php

use App\Http\Controllers\articuloController;
use App\Http\Controllers\ArticuloController as ControllersArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
})->name('inicio');

Auth::routes();

Route::resource('/clientes', ClienteController::class);
Route::resource('/proveedores', ProveedorController::class);
Route::resource('/articulos', ControllersArticuloController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');