<?php
namespace App;
<<<<<<< HEAD
use Illuminate\Notifications\Notifiable;
=======

>>>>>>> 9d8da7cd819abd81830fc9626734f27c59e19da0
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
<<<<<<< HEAD
  //  use Notifiable;
=======
>>>>>>> 9d8da7cd819abd81830fc9626734f27c59e19da0
   // protected $table="empleados";
   protected $primaryKey='idEmpleado';
   protected $fillable=['codigoEmpleado','nombre','fotografia','apellidoPaterno',
       'apellidoMaterno','fechaNacimiento','estadoCivil','sexo','curpi','curpf','numeroSeguroSocial',
       'umf','rfc','homoclave','tipoContrato','expediente','telefono','codigoPostal',
       'direccion','poblacion','estado','nombrePadre','nombreMadre','numeroAfore',
       'numeroFonacot','correoElectronico','clabeInterbancaria','entidadFederativa','registro'];
   public $timestamps=false;
}
