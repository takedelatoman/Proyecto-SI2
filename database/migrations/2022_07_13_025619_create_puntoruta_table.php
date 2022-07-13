<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuntorutaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntoruta', function (Blueprint $table) {
            $table->id();
            $table->double('latitud');
            $table->double('altitud');
            $table->unsignedBigInteger('id_linea')->nullable();
            $table->foreign('id_linea')->on('linea')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('puntoruta');
    }
}
