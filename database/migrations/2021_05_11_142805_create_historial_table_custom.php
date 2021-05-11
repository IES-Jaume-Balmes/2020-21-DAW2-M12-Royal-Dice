<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialTableCustom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_table_custom', function (Blueprint $table) {
            $table->id();
            $table->foreignId('juego')->references('id')->on('juegos');
            $table->integer('apuesta');
            $table->foreignId('usuario')->references('id')->on('users');
            $table->integer('beneficioperdida');
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
        Schema::dropIfExists('historial_table_custom');
    }
}
