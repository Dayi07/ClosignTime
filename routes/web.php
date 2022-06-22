<?php

use App\Http\Controllers\DocumentoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ModulosController;

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


Route::controller(ModulosController::class)->group(function(){
    Route::get('/perfil/{id}', 'show')->name('perfil');
    Route::get('/documentos', 'Documentos')->name('documento');
});

Route::controller(InicioController::class)->group(function(){
    Route::get('/inicio_sesion', 'index')->name('inicio');
});
Route::get('/registrarse', [InicioController::class, 'Registrarse']);
Route::post('/registrarse', [InicioController::class, 'store'])->name('registrarse');


Route::controller(DocumentoController::class)->group(function(){
    Route::get('/agregar', 'Nuevo')->name('agregar');
    Route::get('/modificar', 'ModificarView')->name('modificar');
});

