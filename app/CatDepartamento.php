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

    public $timestamps=false;
    
    /*La relacion con la tabla departamentos*/
    public function departamentos(){
        return $this->hasMany('App\Modelos\Departamentos','catDepa_id','idcatdepartamento');
    }
}

