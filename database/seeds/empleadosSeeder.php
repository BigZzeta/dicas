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
            'codigoEmpleado' => 'XC01', 'nombre' => 'José', 'apellidoPaterno' => 'Gonzales',
            'apellidoMaterno' => 'Altamirano', 'fechaNacimiento' => '1995-02-23', 'lugarNacimiento' => 'Tabasco',
            'estadoCivil' => 'Casado (a)', 'sexo' => 'Masculino', 'curp' => 'GOAP950223HTCNHL00',
            'numeroSeguroSocial' => '123451234', 'umf' => '2131', 'rfc' => '12345623',
            'tipoContrato' => '2', 'expediente' => '...',
            'telefono' => '9341157918', 'codigoPostal' => '86934', 'direccion' => '...',
            'poblacion' => '...', 'nombrePadre' => 'Roberto Gonzales Nahum', 'nombreMadre' => 'Reyna Altamirano Morales',
            'numeroAfore' => '43968', 'numeroFonacot' => '0097', 'correoElectronico' => 'pgn@hotmail.com',
            'clabeInterbancaria' => '12088827298456', 'entidadFederativa' => '5'
        ]);
        DB::table('empleados')->insert([
            'codigoEmpleado' => 'XC02', 'nombre' => 'Maria', 'apellidoPaterno' => 'Gonzales',
            'apellidoMaterno' => 'Altamirano', 'fechaNacimiento' => '1996-06-04', 'lugarNacimiento' => 'Tabasco',
            'estadoCivil' => 'Soltero (a)', 'sexo' => 'Femenino', 'curp' => 'GOAM960604HTCNHL00',
            'numeroSeguroSocial' => '123451001', 'umf' => '2112', 'rfc' => '09867909',
            'tipoContrato' => '2', 'expediente' => '...',
            'telefono' => '9341157918', 'codigoPostal' => '86934', 'direccion' => '...',
            'poblacion' => '...', 'estado' => 'B', 'nombrePadre' => 'Roberto Gonzales Nahum', 'nombreMadre' => 'Reyna Altamirano Morales',
            'numeroAfore' => '42968', 'numeroFonacot' => '2307', 'correoElectronico' => 'mga@hotmail.com',
            'clabeInterbancaria' => '12088809828456', 'entidadFederativa' => '10'
        ]);
    }

}
