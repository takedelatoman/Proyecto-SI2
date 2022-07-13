<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMicroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('micro', function (Blueprint $table) {
            $table->id();
            $table->string('placa');
            $table->string('modelo');
            $table->string('cant_asiento');
            $table->string('num_interno');
            $table->string('foto')->nullable();
            $table->date('fecha_asignacion');
            $table->date('fecha_baja')->nullable();
            $table->boolean('disponible');
            $table->unsignedBigInteger('id_linea')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_linea')->on('linea')->references('id')->onDelete('cascade');
            $table->foreign('id_user')->on('users')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('micro');
    }
}
