<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Clase alumno
class Alumnos extends Model
{
    protected $table = 'alumnos';
    protected $fillable = ['nombre', 'apellido', 'fechanacimiento',
     'direccion',  'genero',  'telefono', 'correo', 'clave' ];
     protected $primaryKey = 'idalumno';
}
