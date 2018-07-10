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
            $table->increments('idEmpleado');
<<<<<<< HEAD
            $table->string('codigoEmpleado',30)->nullable()->unique();
=======
            $table->string('codigoEmpleado',30)->nullable();
>>>>>>> 9d8da7cd819abd81830fc9626734f27c59e19da0
            $table->string('nombre',40)->nullable();
            $table->string('fotografia',100)->nullable();
            $table->string('apellidoPaterno',40)->nullable();
            $table->string('apellidoMaterno',40)->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->string('estadoCivil',1)->nullable();
            $table->string('sexo',1)->nullable();
<<<<<<< HEAD
            $table->string('curpi',6)->nullable()->unique();
            $table->string('curpf',8)->nullable()->unique();
            $table->string('numeroSeguroSocial',15)->nullable()->unique();
            $table->integer('umf')->nullable()->unique();
            $table->string('rfc',4)->nullable()->unique();
            $table->string('homoclave',4)->nullable()->unique();
=======
            $table->string('curpi',6)->nullable();
            $table->string('curpf',8)->nullable();
            $table->string('numeroSeguroSocial',15)->nullable();
            $table->integer('umf')->nullable();
            $table->string('rfc',4)->nullable();
            $table->string('homoclave',4)->nullable();
>>>>>>> 9d8da7cd819abd81830fc9626734f27c59e19da0
            $table->string('tipoContrato',2)->nullable();
            $table->string('expediente',500)->nullable();
            $table->string('telefono',15)->nullable();
            $table->integer('codigoPostal')->nullable();
            $table->string('direccion',60)->nullable();
            $table->string('poblacion',60)->nullable();
            $table->string('estado',3)->nullable();
            $table->string('nombrePadre',40)->nullable();
            $table->string('nombreMadre',40)->nullable();
<<<<<<< HEAD
            $table->string('numeroAfore',40)->nullable()->unique();
            $table->string('numeroFonacot',40)->nullable()->unique();
            $table->string('correoElectronico',40)->nullable()->unique();
            $table->string('clabeInterbancaria',25)->nullable()->unique();
            $table->string('entidadFederativa',2)->nullable();
            $table->string('status',20)->default('activo');
=======
            $table->string('numeroAfore',40)->nullable();
            $table->string('numeroFonacot',40)->nullable();
            $table->string('correoElectronico',40)->nullable();
            $table->string('clabeInterbancaria',25)->nullable();
            $table->string('entidadFederativa',2)->nullable();
>>>>>>> 9d8da7cd819abd81830fc9626734f27c59e19da0
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
