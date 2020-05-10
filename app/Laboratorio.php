<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes; 

class Laboratorio extends Model
{
    //use SoftDeletes;
    protected $fillable = ['codigo_l','nombre_l','direccion_l','telefono_l']; 
}
