<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_viaje');
            $table->string('status_viaje');
            $table->unsignedInteger('id_vehiculo');
            $table->unsignedInteger('id_operador');
            $table->integer('kilometroje_inicial');
            $table->integer('kilometroje_final');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->timestamps();
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos');
            $table->foreign('id_operador')->references('id')->on('operadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viajes');
    }
}
