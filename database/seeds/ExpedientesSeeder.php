<?php

use Illuminate\Database\Seeder;

class ExpedientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('expedientes')->insert([
          'empleados_idempleado'=>'1',
          'solicitudempleo'=>'solicitud.doc',
          'curriculum'=>'curriculum.doc',
          'actanacimiento'=>'acta.doc',
      //     )->nullable();
      // $table->string('comprobantedomicilio')->nullable();
      // $table->string('fotodomicilio')->nullable();
      // $table->string('croquisdomicilio')->nullable();
      // $table->string('ife')->nullable();
      // $table->string('cartarecomendacion1')->nullable();
      // $table->string('cartarecomendacion2')->nullable();
      // $table->string('cartarecomendacion3')->nullable();
      // $table->string('cartaafiliacionimss')->nullable();
      // $table->string('curp')->nullable();
      // $table->string('cartaisr')->nullable();
      // $table->string('cartainfonavit')->nullable();
      // $table->string('antecedentesnopenales')->nullable();
      // $table->string('rfc')->nullable();
      // $table->string('observaciones')->nullable();
      // $table->string('campoextra1')->nullable();
      // $table->string('campoextra2')->nullable();
      // $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));

    ]);

    }
}
