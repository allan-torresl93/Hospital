<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion_de');
            $table->string('fecha_de');

            $table->bigInteger('idHospital')->unsigned();
            $table->foreign('idHospital')->references('id')->on('hospitals');

            $table->bigInteger('idLaboratorio')->unsigned();
            $table->foreign('idLaboratorio')->references('id')->on('laboratorios');
            
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
        Schema::dropIfExists('detalles');
    }
}
