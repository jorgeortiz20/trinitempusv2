<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {

            $table->bigInteger('idOferta');
            $table->bigInteger('idUserSolicita');
            $table->enum('estadoSolicictud',['PENDIENTE','ACEPTADO', 'RECHAZADO', 'REALIZADO']);
            $table->integer('minutosSolicitados');
            $table->date('fechaInicio');
            $table->date('fechaFinal');
            $table->string('comentario');
            $table->tinyInteger('puntuacion');
            $table->id();
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
        Schema::dropIfExists('servicios');
    }
}
