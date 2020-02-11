<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->bigIncrements('idPartido');
            $table->unsignedBigInteger('eqLocal');
            $table->foreign('eqLocal')->references('idClub')->on('clubes');
            $table->unsignedBigInteger('eqVisitante');
            $table->foreign('eqVisitante')->references('idClub')->on('clubes');
            $table->unsignedBigInteger('estadio');
            $table->foreign('estadio')->references('idEstadio')->on('estadios');
            $table->date('fecha');
            $table->unsignedBigInteger('liga');
            $table->foreign('liga')->references('idLiga')->on('ligas');
            $table->integer('golesLocal');
            $table->integer('golesVisitante');
            $table->unsignedBigInteger('arbitro');
            $table->foreign('arbitro')->references('idArbitro')->on('arbitros');
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
        Schema::dropIfExists('partidos');
    }
}
