<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table="Departamentos";


    protected $primaryKey="iddepartamento";
    protected $fillable=['unes_idune','catDepa_id',
        'num_depa','nombre','num_empleados','num_puestos','status','registro'];
    public $timestamps=false;
    
    public function une(){
        return $this->belongsTo('App\Une','unes_idune','idune');
    }
    public function cat_departamentos(){
        return $this->belongsTo('App\CatDepartamento','catDepa_id','idcatdepartamento');
    }
}
