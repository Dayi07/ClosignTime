<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan', function (Blueprint $table) {
            $table->id('Id_plan');
            $table->unsignedBigInteger('Usuario_id');
            $table->string('Nombre_plan');
            $table->integer('Costo_plan');
            $table->dateTime('Tiempo_limite');
            $table->boolean('Estado_plan');
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
        Schema::dropIfExists('plan');
    }
}
