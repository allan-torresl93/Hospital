<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes; 

class Paciente extends Model
{
    //use SoftDeletes;
    protected $fillable = ['cedula_paciente','numero_registro_p','numero_cama_p','nombre_p','direccion_p','fecha_nacimiento_p','sexo_p','idSala']; 
}
