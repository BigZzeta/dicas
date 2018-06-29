<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
   // protected $table="empleados";
   protected $primaryKey='idEmpleado';
   protected $fillable=['codigoEmpleado','nombre','fotografia','apellidoPaterno',
       'apellidoMaterno','fechaNacimiento','estadoCivil','sexo','curpi','curpf','numeroSeguroSocial',
       'umf','rfc','homoclave','tipoContrato','expediente','telefono','codigoPostal',
       'direccion','poblacion','estado','nombrePadre','nombreMadre','numeroAfore',
       'numeroFonacot','correoElectronico','clabeInterbancaria','entidadFederativa','registro'];
   public $timestamps=false;
}
