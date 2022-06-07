<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends DatabaseController
{
    public function __invoke()
    {
    }

    public function Inicio(){
        return view('Inicio_sesion');
    }

    public function Registrarse(){
        return view('Registrarse');
    }


}
