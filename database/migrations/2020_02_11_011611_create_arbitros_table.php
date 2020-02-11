<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArbitrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbitros', function (Blueprint $table) {
            $table->bigIncrements('idArbitro');
            $table->string('nomArbitro', 100);
            $table->string('apeArbitro', 100)->nullable();
            $table->unsignedBigInteger('ciuArbitro');
            $table->foreign('ciuArbitro')->references('idCiudad')->on('ciudades');
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
        Schema::dropIfExists('arbitros');
    }
}
