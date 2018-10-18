<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catexpedientes extends Model
{
  protected $primaryKey = 'idcatexpediente';
  protected $fillable = [
      'nombre'
  ];

  public $timestamps=false;
}
