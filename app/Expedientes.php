<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expedientes extends Model
{
  //protected $table ='expedientes';
  protected $primaryKey = 'idexpediente';
  protected $fillable = [
      'empleados_idempleado','solicitudempleo','curriculum','actanacimiento',
      'comprobantedomicilio','fotodomicilio','croquisdomicilio','ife',
      'cartarecomendacion1','cartarecomendacion2','cartarecomendacion3',
      'cartaafiliacionimss','curp','cartaisr','cartainfonavit','antecedentesnopenales',
      'rfc','observaciones','campoextra1','campoextra2',      
  ];

  public $timestamps=false;
}
