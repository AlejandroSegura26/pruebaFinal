<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Validation\Rules\Unique;

class CreateUsuariosTable extends Migration
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
            $table->string('nombre')->unique();
            $table->string('correo_electronico',75);
            $table->string('usuario')->unique();
            $table->string('password');
            $table->boolean('condicion')->default(1);
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade');
            $table->rememberToken();
        });
        DB::insert('insert into usuarios (id, nombre, correo_electronico, usuario, password, rol_id) values (?, ?, ?, ?, ?, ?)', [1, 'Omar Roman','ourczz@gmail.com','ourc','$2y$12$LKYABBuAmrDJTQikaS64/exiKI3eueRdJddGH76zQ3zKMn27n.4wq','1']);
        DB::insert('insert into usuarios (id, nombre, correo_electronico, usuario, password, rol_id) values (?, ?, ?, ?, ?, ?)', [2, 'Mario Rodríguez','mariordz@gmail.com','mariordz','$2y$12$LKYABBuAmrDJTQikaS64/exiKI3eueRdJddGH76zQ3zKMn27n.4wq','2']);
        DB::insert('insert into usuarios (id, nombre, correo_electronico, usuario, password, rol_id) values (?, ?, ?, ?, ?, ?)', [3, 'Eduardo Martínez','emartinez@gmail.com','emartinez','$2y$12$LKYABBuAmrDJTQikaS64/exiKI3eueRdJddGH76zQ3zKMn27n.4wq','3']);
        DB::insert('insert into usuarios (id, nombre, correo_electronico, usuario, password, rol_id) values (?, ?, ?, ?, ?, ?)', [4, 'Alejandro Segura','asegura@gmail.com','asegura','$2y$12$LKYABBuAmrDJTQikaS64/exiKI3eueRdJddGH76zQ3zKMn27n.4wq','4']);
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
