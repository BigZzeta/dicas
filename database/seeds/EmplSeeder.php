<?php

use Illuminate\Database\Seeder;

class EmplSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('empleados')->insert([
          'codigoEmpleado'=>'201029',
          'nombre'=>'Eric',
          'apellidoPaterno'=>'Centeno',
          'apellidoMaterno'=>'Arcos',
          // 'fechaNacimiento'=>'',
          'estadoCivil'=>'1',
          'sexo'=>'1',
          'curpi'=>'ceae',
          'curpf'=>'uhtcnnr0',
          'numeroSeguroSocial'=>'',
          'umf'=>'16',
          'rfc'=>'ceae',
          'homoclave'=>'ua4',
          'tipoContrato'=>'5',
          'expediente'=>'',
          'telefono'=>'9988449791',
          'codigoPostal'=>'77518',
          'direccion'=>'calle sn',
          'poblacion'=>'Cancun',
          'estado'=>'1',
          'nombrePadre'=>'',
          'nombreMadre'=>'',
          'numeroAfore'=>'',
          'numeroFonacot'=>'',
          'correoElectronico'=>'ericcenteno1@gmail.com',
          'clabeInterbancaria'=>'',
          'entidadFederativa'=>'1',
          'status'=>'1'
      ]);
    }
}
