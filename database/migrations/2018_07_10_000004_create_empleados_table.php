<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'empleados';

    /**
     * Run the migrations.
     * @table empleados
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idempleado');
            $table->string('codigoempleado', 30)->nullable();
            $table->string('nombre', 40)->nullable()->default(null);
            $table->binary('fotografia')->nullable()->default(null);
            $table->string('apellidoPaterno', 40)->nullable()->default(null);
            $table->string('apellidoMaterno', 40)->nullable()->default(null);
            $table->string('nombreLargo', 120)->nullable()->default(null);
            $table->date('fechaNacimiento')->nullable()->default(null);
            $table->string('lugarnacimiento', 40)->nullable()->default(null);
            $table->string('estadoCivil', 1)->nullable()->default(null);
            $table->string('sexo', 1)->nullable()->default(null);
            $table->string('curpi', 6)->nullable()->default(null);
            $table->string('curpf', 8)->nullable()->default(null);
            $table->string('numeroSeguroSocial', 15)->nullable()->default(null);
            $table->integer('umf')->nullable();
            $table->string('rfc', 4)->nullable()->default(null);
            $table->string('homoclave', 4)->nullable()->default(null);
            $table->string('tipoContrato', 2)->nullable()->default(null);
            $table->longText('expediente')->nullable()->default(null);
            $table->string('telefono', 20)->nullable()->default(null);
            $table->integer('codigoPostal')->nullable()->default(null);
            $table->string('direccion', 60)->nullable()->default(null);
            $table->string('poblacion', 60)->nullable()->default(null);
            $table->string('estado', 3)->nullable()->default(null);
            $table->string('nombrePadre', 60)->nullable()->default(null);
            $table->string('nombreMadre', 60)->nullable()->default(null);
            $table->string('numeroAfore', 50)->nullable()->default(null);
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('NumeroFonacot', 20)->nullable();
            $table->string('CorreoElectronico', 60)->nullable()->default(null);
            $table->string('ClabeInterbancaria', 30)->nullable()->default(null);
            $table->string('EntidadFederativa', 2)->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
