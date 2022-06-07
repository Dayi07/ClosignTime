<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulosController extends DatabaseController
{
    public function Perfil(){
        return view('Perfil');
    }

    public function Cronometro(){
        return view('');
    }

    public function Documentos(){
        return view('Documentos');
    }

}
