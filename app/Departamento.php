<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //protected $table ='departamento';
    protected $primaryKey = 'iddepartamento';
    protected $fillable = [
        'numerodepartamento','nombre','numempleados','numerodepuestos'
    ];
}
