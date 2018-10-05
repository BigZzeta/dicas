<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
  //protected $table ='empresa';
  protected $primaryKey = 'idempresa';
  protected $fillable = [
      'nombre','direccion','colonia','codigopostal','telefono1','telefono2','siglas'
  ];

  public $timestamps=false;
}
