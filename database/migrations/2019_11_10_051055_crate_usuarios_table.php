<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('usuarios', function (Blueprint $table) {
             
            $table->bigIncrements('id');
            $table->string('nombre',300);
            $table->string('usuario',20);
            $table->string('contra',20);
            $table->string('correo_electronico',50);
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade');
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
            Schema::dropIfExists('usuarios');
        }
}
