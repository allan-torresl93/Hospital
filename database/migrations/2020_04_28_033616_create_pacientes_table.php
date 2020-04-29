<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cedula_paciente');
            $table->string('numero_registro_p');
            $table->string('numero_cama_p');
            $table->string('nombre_p');
            $table->string('direccion_p');
            $table->string('fecha_nacimiento_p');
            $table->string('sexo_p');

            $table->bigInteger('idSala')->unsigned();
            $table->foreign('idSala')->references('id')->on('salas');
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
        Schema::dropIfExists('pacientes');
    }
}
