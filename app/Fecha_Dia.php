<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fecha_Dia extends Model
{
    protected $fillable = ['fecha','idPaciente','idDiagnostico']; 
}
