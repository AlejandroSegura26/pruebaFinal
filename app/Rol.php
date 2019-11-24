<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //Se declara la tabla para referenciarla al modelo
    protected $table = 'roles';
    //Declaración de un arreglo con el nombre de los campos de la base de datos que funciona para realizar la conexion con la bd
    protected $fillable = ['nombre','descripcion','condicion'];
    //Se desactiva las propiedades para obtener la fecha y hora en que se inserto/actualizo un registro
    public $timestamps = false;
    //Función para declarar la relación entre la tabla 'users' y 'rol' donde varios usuarios estan asignados a un rol
    public function users() {
        return $this->hasMany('App\User');
    }
}