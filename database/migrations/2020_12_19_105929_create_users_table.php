<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table-> string('nickname')->unique();
            $table-> string('nombreUsuario');
            $table-> string('apellidoUsuario');
            $table-> date('fechaNacimiento');
            $table-> string('ciudadResidencia');
            $table-> string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table-> string('password');
            $table-> boolean('isAdmin');
            $table-> integer('saldoTiempo');
            $table-> bigInteger('telefonoContacto');


            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
