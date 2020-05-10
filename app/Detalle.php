<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes; 

class Detalle extends Model
{
    //use SoftDeletes;
    protected $fillable = ['descripcion_de','fecha_de','idHospital','idLaboratorio']; 
}
