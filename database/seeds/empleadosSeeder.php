<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class empleadosSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('empleados')->insert([
            'idpuesto' => 1, 'idhorario'=>1,'cat_entidad_federativa_id'=>1,
            'codigoempleado' => 'XC01', 'nombre' => 'José', 'apellidoPaterno' => 'Gonzales',
            'apellidoMaterno' => 'Altamirano', 'fechaNacimiento' => '1995-02-23', 'lugarNacimiento' => 'Tabasco',
            'estadocivil' => 'Casado (a)', 'sexo' => 'Masculino', 'curp' => 'GOAP950223HTCNHL00',
            'numerosegurosocial' => '123451234', 'umf' => '2131', 'rfc' => '12345623',
            'tipocontrato' => '2', 'expediente' => 'ninguno',
            'telefono' => '9341157918', 'codigopostal' => '86934', 'direccion' => '...',
            'poblacion' => '...','estadoempleado'=>'A', 'nombrepadre' => 'Roberto Gonzales Nahum', 'nombremadre' => 'Reyna Altamirano Morales',
            'numeroafore' => '43968', 'numeroFonacot' => '0097', 'correoElectronico' => 'ericcenteno1@gmail.com',
            'cuentapagoelectronico' => '1208882729845615', 'entidadFederativa' => '5',
            'sueldofijo'=>120.56,
            'fechasueldofijo'=>'2018-09-01',
            'sueldovariable'=>200.45,
            'fechasueldovariable'=>'2018-09-01',
            'fechaalta'=>'2018-09-01',
            'password'=> bcrypt('celeste1'),
        ]);
        DB::table('empleados')->insert([
            'idpuesto' => 2, 'idhorario'=>1,'cat_entidad_federativa_id'=>2,
            'codigoEmpleado' => 'XC02', 'nombre' => 'Maria', 'apellidoPaterno' => 'Gonzales',
            'apellidoMaterno' => 'Altamirano', 'fechaNacimiento' => '1996-06-04', 'lugarNacimiento' => 'Tabasco',
            'estadoCivil' => 'Soltero (a)', 'sexo' => 'Femenino', 'curp' => 'GOAM960604HTCNHL00',
            'numeroSeguroSocial' => '123451001', 'umf' => '2112', 'rfc' => '09867909',
            'tipoContrato' => '2', 'expediente' => '...',
            'telefono' => '9341157918', 'codigoPostal' => '86934', 'direccion' => '...',
            'poblacion' => '...', 'estadoempleado' => 'B', 'nombrePadre' => 'Roberto Gonzales Nahum', 'nombreMadre' => 'Reyna Altamirano Morales',
            'numeroAfore' => '42968', 'numeroFonacot' => '2307', 'correoElectronico' => 'mga@hotmail.com',
            'cuentapagoelectronico' => '12088809828456', 'entidadFederativa' => '10',
            'sueldofijo'=>120.56,
            'fechasueldofijo'=>'2018-09-01',
            'sueldovariable'=>200.45,
            'fechasueldovariable'=>'2018-09-01',
            'fechaalta'=>'2018-09-01',
            'password'=> bcrypt('celeste12'),
        ]);
    }

}
