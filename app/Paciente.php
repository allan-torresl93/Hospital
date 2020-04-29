<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['cedula','numero_registro','numero_cama','nombre','direccion','fecha_nacimiento','sexo','idSala']; 
}
