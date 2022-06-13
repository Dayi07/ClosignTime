<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_plan', function (Blueprint $table) {
            $table->unsignedBigInteger('Usuario_id');
            $table->foreign('Usuario_id')->references('Id_usuario')->on('usuario');
            $table->unsignedBigInteger('Plan_id');
            $table->foreign('Plan_id')->references('Id_plan')->on('plan');
            $table->string('Entidad_pago');
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
        Schema::dropIfExists('_usuario_plan');
    }
}
