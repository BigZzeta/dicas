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
      // factory(puestos::class,10)->create();

      DB::table('puestos')->insert([
          'numeropuesto'=>1,
          'nombre'=>'SISTEMAS',
          // 'cartatecnica'=>'',
          'funciones'=>'venta de autos',
          'sueldominimo'=>'200.34',
          'sueldomaximo'=>'500.25'
      ]);

      DB::table('puestos')->insert([
          'numeropuesto'=>2,
          'nombre'=>'CONTABILIDAD',
          'cartatecnica'=>'',
          'funciones'=>'realizar contratos',
          'sueldominimo'=>'150.34',
          'sueldomaximo'=>'400.25'
      ]);
      DB::table('puestos')->insert([
          'numeropuesto'=>3,
          'nombre'=>'AUXILIAR ADMINISTRATIVO',
          'cartatecnica'=>'',
          'funciones'=>'pintar autos',
          'sueldominimo'=>'225.04',
          'sueldomaximo'=>'370.25'
      ]);

      // DB::table('puestos')->insert([
      //     'numeropuesto'=>4,
      //     'nombre'=>'AUXILIAR ADMINISTRATIVO', //mismo puesto debe marcar error
      //     'cartatecnica'=>'',
      //     'sueldominimo'=>'225.04',
      //     'sueldomaximo'=>'370.25'
      // ]);

    }
}
