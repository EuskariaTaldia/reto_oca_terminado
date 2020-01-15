<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMujeresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('mujeres', function (Blueprint $table) {
        //     $table->bigIncrements('codMujer');
        //     $table->primary('codMujer');
        //     $table->integer('codArea')->unique();
        //     $table->string('nombre');
        //     $table->string('fechas');
        //     $table->string('subarea');
        //     $table->text('datos');
        //     $table->text('datos_eus');
        //     $table->text('datos_ing');
        //     $table->string('enlace');
        //     $table->integer('codZona')->unique();
        //     $table->string('zona');
        //     $table->string('fotografia');           

            
        //     // Relaciones
        //     $table->foreign('codArea')->references('codArea')->on('areas');
        //     $table->foreign('codZona')->references('codZona')->on('zonas');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('mujeres');
    }


}
