<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->bigIncrements('codPregun');
            $table->primary('codPregun');
            $table->string('resCorre');
            $table->string('resFall1');
            $table->string('resFall1');
            $table->integer('codMujer')->unsigned();
            
            // Relaciones
            $table->foreign('codMujer')->references('codMujer')->on('mujeres');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}
