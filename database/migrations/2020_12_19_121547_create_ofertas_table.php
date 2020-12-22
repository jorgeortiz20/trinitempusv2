<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table-> string('nombreOferta');
            $table-> bigInteger( 'idCategoria');
            $table ->integer( 'tiempoDiarioOfrece');
            $table ->date('fechaPuedeIniciar');
            $table ->date('fechaDebeAcabar');
            $table ->string('fotoOferta');
            $table ->bigInteger('idUser');
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
        Schema::dropIfExists('ofertas');
    }
}
