<?php

use Illuminate\Database\Seeder;

class PuestosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(departamento::class,10)->create();

      /*DB::table('departamentos')->insert([
          'numerodepartamento'=>1,
          'nombre'=>'CPA',
          'numempleados'=>20,
          // 'condicion'=>'1'

      ]);*/
    }
}
