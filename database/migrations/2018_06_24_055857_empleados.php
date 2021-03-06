<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //creando la tabla empleados del modelo que hay en dropbox
    public function up()
    {
         Schema::create('empleados', function (Blueprint $table) {
            $table->increments('idempleado')->unique();
            $table->integer('idpuesto');
            $table->integer('idhorario');
            $table->integer('cat_entidad_federativa_id');
            $table->string('codigoempleado',30)->nullable()->unique();
            $table->string('nombre',40)->nullable();
            $table->string('fotografia',100)->nullable();
            $table->string('apellidoPaterno',40)->nullable();
            $table->string('apellidoMaterno',40)->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->string('lugarNacimiento',40)->nullable();
            $table->string('estadoCivil',15)->nullable();
            $table->string('sexo',10)->nullable();
            $table->string('rfc',12)->nullable()->unique();
            $table->string('curp',18)->nullable()->unique();
            $table->string('numeroSeguroSocial',15)->nullable()->unique();
            $table->integer('umf')->nullable()->unique();
            $table->string('tipoContrato',2)->nullable();
            $table->string('expediente',500)->nullable();
            $table->string('telefono',15)->nullable();
            $table->integer('codigoPostal')->nullable();
            $table->string('direccion',100)->nullable();
            $table->string('poblacion',60)->nullable();
            $table->string('estadoempleado',3)->default('A');
            $table->string('nombrePadre',40)->nullable();
            $table->string('nombreMadre',40)->nullable();
            $table->string('numeroAfore',40)->nullable()->unique();
            $table->string('NumeroFonacot',40)->nullable()->unique();
            $table->string('correoElectronico',40)->nullable()->unique();
            $table->string('cuentapagoelectronico',25)->nullable()->unique();
            $table->string('entidadFederativa',2)->nullable();
            $table->double('sueldofijo')->nullable();
            $table->date('fechasueldofijo')->nullable();
            $table->double('sueldovariable')->nullable();
            $table->date('fechasueldovariable')->nullable();
            $table->date('fechaalta')->nullable();
            $table->string('password');
            $table->timestamp('registro')->default(DB::raw('CURRENT_TIMESTAMP'));
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
