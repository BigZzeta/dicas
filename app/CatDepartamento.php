<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatDepartamento extends Model
{
    //protected $table ='departamento';
    protected $primaryKey = 'idcatdepartamento';
    protected $fillable = [
        'numerodepartamento','nombre','numempleados','numerodepuestos'
    ];
}
