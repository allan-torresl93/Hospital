<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes; 

class Sala extends Model
{
    //use SoftDeletes;
    protected $fillable = ['codigo_s','nombre_s','cantidad_camas_s','idHospital'];
}
