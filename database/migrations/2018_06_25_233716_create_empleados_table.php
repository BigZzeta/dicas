<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('idempleado');
            $table->string('codigoempleado',30)->nullable();
            $table->string('nombre',40);
            $table->string('fotografia',100);
            $table->string('apellidoPaterno',40);
            $table->string('apellidoMaterno',40);
            $table->date('fechaNacimiento');
            $table->string('estadoCivil',1);
            $table->string('sexo',1);
            $table->string('curpi',6);
            $table->string('curpf',8);
            $table->string('numeroSeguroSocial',15);
            $table->integer('umf');
            $table->string('rfc',4);
            $table->string('homoclave',4);
            $table->string('tipoContrato',2);
            $table->string('expediente',500);
            $table->string('telefono',15);
            $table->integer('codigoPostal');
            $table->string('direccion',60);
            $table->string('poblacion',60);
            $table->string('estado',3);
            $table->string('nombrePadre',40);
            $table->string('nombreMadre',40);
            $table->string('numeroAfore',40);
            $table->string('numeroFonacot',40);
            $table->string('correoElectronico',40);
            $table->string('clabeInterbancaria',25);
            $table->string('entidadFederativa',2);
            $table->rememberToken();
            $table->timestamp('registro');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
