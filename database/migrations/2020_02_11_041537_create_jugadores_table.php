<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->bigIncrements('idJugador');
            $table->string('nomJugador', 100);
            $table->string('apeJugador', 100)->nullable();
            $table->unsignedBigInteger('club');
            $table->foreign('club')->references('idClub')->on('clubes');
            $table->unsignedBigInteger('posicion');
            $table->foreign('posicion')->references('idPosicion')->on('posiciones');
            $table->unsignedBigInteger('pais');
            $table->foreign('pais')->references('idPais')->on('paises');
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
        Schema::dropIfExists('jugadores');
    }
}
