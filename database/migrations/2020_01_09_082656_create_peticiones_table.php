<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeticionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peticiones', function (Blueprint $table) {
            $table->bigIncrements('codPeti');
            $table->primary('codPeti');
            $table->string('nombre');
            $table->string('fechas');
            $table->string('subarea');
            $table->text('datos');
            $table->text('datos_eus');
            $table->text('datos_ing');
            $table->string('enlace');
            $table->string('zona');
            $table->string('fotografia');         
            $table->string('codUsu')->unique();

            // Relaciones
            $table->foreign('codUsu')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peticiones');
    }
}
