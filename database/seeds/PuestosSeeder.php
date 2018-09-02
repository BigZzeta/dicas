<?php

use Illuminate\Database\Seeder;

class PuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // factory(puesto::class,10)->create();

      DB::table('puesto')->insert([
          'numeropuesto'=>1,
          'descripcion'=>'SISTEMAS',
          'cartatecnica'=>'',
          'sueldominimo'=>'200.34',
          'sueldomaximo'=>'500.25'
      ]);

      DB::table('puesto')->insert([
          'numeropuesto'=>2,
          'descripcion'=>'CONTABILIDAD',
          'cartatecnica'=>'',
          'sueldominimo'=>'150.34',
          'sueldomaximo'=>'400.25'
      ]);
      DB::table('puesto')->insert([
          'numeropuesto'=>3,
          'descripcion'=>'AUXILIAR ADMINISTRATIVO',
          'cartatecnica'=>'',
          'sueldominimo'=>'225.04',
          'sueldomaximo'=>'370.25'
      ]);

      // DB::table('puesto')->insert([
      //     'numeropuesto'=>4,
      //     'descripcion'=>'AUXILIAR ADMINISTRATIVO', //mismo puesto debe marcar error
      //     'cartatecnica'=>'',
      //     'sueldominimo'=>'225.04',
      //     'sueldomaximo'=>'370.25'
      // ]);

    }
}
