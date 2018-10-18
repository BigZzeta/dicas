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
          'idempleado'=>'1',
          'idcatexpediente'=>'1',
          'documento'=>'Solicitud de Empleo'
        ]);

    }
}
