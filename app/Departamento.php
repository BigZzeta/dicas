<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //protected $table ='departamento';
    //protected $primaryKey = 'id';
    protected $fillable = [
        'nombre','descripcion','condicion',
    ];
}
