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
            $table-> bigInteger( 'categoria_id');  // Modificado by Pepe
            $table ->integer( 'tiempoDiarioOfrece');
            $table ->date('fechaPuedeIniciar');
            $table ->date('fechaDebeAcabar');
            $table ->string('fotoOferta')->nullable();
            $table ->bigInteger('user_id');     // Modificado by Pepe
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
