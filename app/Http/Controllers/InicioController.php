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
 
    //Funcion para validar el inicio de sesion
    public function inicioUsuario($Correo, $Contrasena){
        $this->correo = $Correo;
        $sql = "SELECT * FROM usuario WHERE Correo_usuario = '$Correo' AND Contraseña_usuario = '$Contrasena'";//Sentencia sql para buscar la existencia del correo y contraseña del usuario
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_num_rows($res);
        return $filas;
    }
    
    

}
