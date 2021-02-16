<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
       //Se define la tabla a la que esta asociada
       protected $table = 'alumno';

       //Se define el nombre de la llave primaria
       protected $primaryKey = 'cve_alumno';
   
       
       protected $fillable = ['nombre','apellido','edad','email','telefono','cve_grupo'];
}
