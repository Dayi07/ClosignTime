<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//https://norvicsoftware.com/controladores-en-laravel-8/
class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuario";

    protected $fillable = ['Id_usuario', 'Nombre_usuario', 'Correo_usuario', 'Edad_usuario', 'Contraseña_usuario', 'Foto_perfil'];

    public function obtenerUsuario(){
        return Usuario::all();
    }

}
