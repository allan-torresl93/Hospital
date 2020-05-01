<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes; 

class Hospital extends Model
{
    //use SoftDeletes;
    protected $fillable = ['codigo_h','nombre_h','direccion_h','telefono_h','cantidad_camas_h']; 
}
