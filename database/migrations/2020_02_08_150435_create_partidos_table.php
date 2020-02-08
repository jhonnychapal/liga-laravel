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
            $table->integer('eqLocal');
            $table->integer('eqVisitante');
            $table->integer('estadio');
            $table->date('fecha');
            $table->integer('liga');
            $table->integer('golesLocal');
            $table->integer('golesVisitante');
            $table->integer('arbitro');
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
