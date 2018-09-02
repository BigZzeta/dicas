<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    //protected $table ='departamento';
    //protected $primaryKey = 'id';
    protected $fillable = [
        'numeropuesto','descripcion','cartatecnica','sueldominimo','sueldomaximo'
    ];
}
