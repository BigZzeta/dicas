<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Une extends Model
{
  //protected $table ='unes';
  protected $primaryKey = 'idune';
  protected $fillable = [
      'numeroune','nombre','direccion','inventariopuestos','estatus'
  ];
}
