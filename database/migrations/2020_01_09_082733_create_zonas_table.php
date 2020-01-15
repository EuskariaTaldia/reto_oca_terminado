<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('zonas', function (Blueprint $table) {
        //     $table->bigIncrements('codZona');
        //     $table->primary('codZona');
        //     $table->string('zona');
        //     $table->string('zona_ing');
        //     $table->string('zona_eus');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('zonas');
    }
}
