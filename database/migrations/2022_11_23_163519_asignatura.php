<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Asignatura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignatura', function(Blueprint $table){
            $table ->string('Nombre');
            $table ->Can_Creditos();
            $table ->string('Intesidad_Horas');
            $table ->string('Carrera_Asociada');
            $table ->Id();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
