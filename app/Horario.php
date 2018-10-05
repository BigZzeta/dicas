<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
  //protected $table ='horario';
  protected $primaryKey = 'idhorario';
  protected $fillable = [
      'nombre','horainicio','horafin','totalhoras','descripcion'
  ];

  public $timestamps=false;
}
