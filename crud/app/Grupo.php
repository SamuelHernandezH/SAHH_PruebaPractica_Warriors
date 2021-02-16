<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    //Se define la tabla a la que esta asociada
    protected $table = 'grupo';

    //Se define el nombre de la llave primaria
    protected $primaryKey = 'cve_grupo';
 
    
    protected $fillable = ['nombre','semestre','grupo','turno'];
}
