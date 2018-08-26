<?php
namespace App\Modelos;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
  //  use Notifiable;
   // protected $table="empleados";
   protected $primaryKey='idEmpleado';
   protected $fillable=['codigoEmpleado','nombre','fotografia','apellidoPaterno',
       'apellidoMaterno','fechaNacimiento','lugarNacimiento','estadoCivil','sexo','curpi','curpf','numeroSeguroSocial',
       'umf','rfc','homoclave','tipoContrato','expediente','telefono','codigoPostal',
       'direccion','poblacion','estado','nombrePadre','nombreMadre','numeroAfore',
       'numeroFonacot','correoElectronico','clabeInterbancaria','entidadFederativa','registro'];
   public $timestamps=false;
}
