<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubes', function (Blueprint $table) {
            $table->bigIncrements('idClub');
            $table->string('nomClub', 100)->unique();
            $table->unsignedBigInteger('entrenador');
            $table->foreign('entrenador')->references('idEntrenador')->on('entrenadores');
            $table->unsignedBigInteger('estadio');
            $table->foreign('estadio')->references('idEstadio')->on('estadios');
            $table->unsignedBigInteger('liga');
            $table->foreign('liga')->references('idLiga')->on('ligas');
            $table->string('escudo');
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
        Schema::dropIfExists('clubes');
    }
}
