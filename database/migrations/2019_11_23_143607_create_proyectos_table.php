<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateProyectosTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('titulo',100);
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('usuarios')->onDelete('cascade');
            $table->unsignedBigInteger('id_manager');
            $table->foreign('id_manager')->references('id')->on('usuarios')->onDelete('cascade');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->string('descripcion',300);
            $table->string('estado',300)->default('inicializado');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto');
    }
}
