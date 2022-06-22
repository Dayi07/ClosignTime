<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class ModulosController extends DatabaseController
{
    protected $usuario;

    public function __construct(Usuario $usuario){
        $this->usuario = $usuario;
    }
    
    public function Perfil(){
        return view('Perfil');
    }

    public function Cronometro(){
        return view('');
    }

    public function Documentos(){
        return view('Documentos');
    }

    public function show($id){
        $usuarios = $this->usuario->obtenerUsuarioPorId($id);
        return view('Perfil/' , ['usuarios' => $usuarios]);
    }

}
