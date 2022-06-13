<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCronometroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cronometro', function (Blueprint $table) {
            $table->id('Id_cronometro');
            $table->unsignedBigInteger('Usuario_id'); //FORANEA DE USUARIO
            $table->time('Cantidad_tiempo');
            $table->time('Tiempo_personalizado')->nullable();
            $table->foreign('Usuario_id')->references('Id_usuario')->on('usuario');
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
        Schema::dropIfExists('cronometro');
    }
}
