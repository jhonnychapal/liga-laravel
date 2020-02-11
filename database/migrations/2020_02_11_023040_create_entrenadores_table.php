<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrenadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenadores', function (Blueprint $table) {
            $table->bigIncrements('idEntrenador');
            $table->string('nomEntrenador', 100);
            $table->string('apeEntrenador', 100)->nullable();
            $table->unsignedBigInteger('paisEntrenador');
            $table->foreign('paisEntrenador')->references('idPais')->on('paises');
            $table->string('foto');
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
        Schema::dropIfExists('entrenadores');
    }
    //comentario prueba
}
