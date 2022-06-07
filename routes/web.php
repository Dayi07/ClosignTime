<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ModulosController;
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

//----------------- https://norvicsoftware.com/vistas-y-rutas-en-laravel-8/
//----------------- https://www.oulub.com/Laravel/migrations
//----------------- https://runebook.dev/es/docs/laravel/docs/8.x/routing


Route::controller(InicioController::class)->group(function(){
    Route::get('inicio_sesion', 'Inicio');
    Route::get('registrarse', 'Registrarse')->name('registrarse');
});

Route::controller(ModulosController::class)->group(function(){
    Route::get('perfil', 'Perfil');
    Route::get('documento', 'Documentos');
});



/*
Route::get('/', function() {
    return view('Inicio_sesion');
});

Route::get('/', function() {
    return view('Registrarse')->name('registrarse');
});*/
