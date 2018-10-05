<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->increments('idexpediente')->unique();
            $table->integer('empleados_idempleado');
            $table->string('solicitudempleo')->nullable();
            $table->string('curriculum')->nullable();
            $table->string('actanacimiento')->nullable();
            $table->string('comprobantedomicilio')->nullable();
            $table->string('fotodomicilio')->nullable();
            $table->string('croquisdomicilio')->nullable();
            $table->string('ife')->nullable();
            $table->string('cartarecomendacion1')->nullable();
            $table->string('cartarecomendacion2')->nullable();
            $table->string('cartarecomendacion3')->nullable();
            $table->string('cartaafiliacionimss')->nullable();
            $table->string('curp')->nullable();
            $table->string('cartaisr')->nullable();
            $table->string('cartainfonavit')->nullable();
            $table->string('antecedentesnopenales')->nullable();
            $table->string('rfc')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('campoextra1')->nullable();
            $table->string('campoextra2')->nullable();
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expedientes');
    }
}
