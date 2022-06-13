<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('Id_usuario')->autoIncrement();
            $table->string('Nombre_usuario');
            $table->string('Correo_usuario')->unique(); //PARA QUE SEA UN VALOR UNICO
            $table->integer('Edad_usuario');
            $table->string('Contraseña_usuario');
            $table->string('Foto_perfil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
