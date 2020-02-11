<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadios', function (Blueprint $table) {
            $table->bigIncrements('idEstadio');
            $table->string('nomEstadio', 100);
            $table->string('capacidad', 10);
            $table->unsignedBigInteger('ciudad');
            $table->foreign('ciudad')->references('idCiudad')->on('ciudades');
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
        Schema::dropIfExists('estadios');
    }
}
