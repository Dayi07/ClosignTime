<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id('Codigo_documento')->autoIncrement(); //AUTO-INCREMENTO
            $table->unsignedBigInteger('Usuario_id');
            $table->dateTime('Fecha_Hora_entrega');
            $table->string('Tipo_documento');
            $table->string('Archivo');
            $table->string('Estado');
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
        Schema::dropIfExists('documentos');
    }
}
