<?php

use Illuminate\Database\Seeder;

class departamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // factory(Catdepartamento::class,5)->create();

      DB::table('cat_departamentos')->insert([
        'numerodepartamento'=>11,
        'nombre'=>'CPA',
        // 'numempleados'=>20,
        // 'condicion'=>'1'
      ]);

      DB::table('cat_departamentos')->insert([
          'numerodepartamento'=>12,
          'nombre'=>'CCSA',
          // 'numempleados'=>30,
          // 'condicion'=>'1'
      ]);



      DB::table('cat_departamentos')->insert([
          'numerodepartamento'=>13,
          'nombre'=>'Contabilidad',
          // 'descripcion'=>'departamento de contabilidad',
          // 'condicion'=>'1'
      ]);

      DB::table('cat_departamentos')->insert([
          'numerodepartamento'=>14,
          'nombre'=>'Sistemas',
          // 'descripcion'=>'departamento de contabilidad',
          // 'condicion'=>'1'
      ]);

      DB::table('cat_departamentos')->insert([
          'numerodepartamento'=>15,
          'nombre'=>'Refacciones',

          // 'condicion'=>'1'
      ]);
    }
}
