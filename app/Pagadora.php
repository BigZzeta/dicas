<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagadora extends Model
{
  // use Notifiable;
  // protected $table="pagadoras";
  protected $primaryKey='idpagadora';
  protected $fillable=['nombre'];
  
  public $timestamps=false;
}
