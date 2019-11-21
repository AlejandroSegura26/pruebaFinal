<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',30);
            $table->string('descripcion',50);
            $table->boolean('condicion')->default(1);
        });
        DB::insert('insert into roles (id, nombre, descripcion) values (?, ?, ?)', [1, 'Administrador','Usuario administrador del sistema']);
        DB::insert('insert into roles (id, nombre, descripcion) values (?, ?, ?)', [2, 'Director de Proyecto','Usuario director de un proyecto']);
        DB::insert('insert into roles (id, nombre, descripcion) values (?, ?, ?)', [3, 'Programador','Usuario programador de un proyecto']);
        DB::insert('insert into roles (id, nombre, descripcion) values (?, ?, ?)', [4, 'Cliente','Usuario cliente de un proyecto']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
