<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes; 

class Fecha_Dia extends Model
{
    //use SoftDeletes;
    protected $fillable = ['fecha','idPaciente','idDiagnostico']; 
}
