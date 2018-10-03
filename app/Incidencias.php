<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencias extends Model
{
  //protected $table ='incidencias';
  protected $primaryKey = 'idincidencia';
  protected $fillable = [
      'nombre',
  ];

  public $timestamps=false;
}
