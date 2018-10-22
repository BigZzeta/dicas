<?php

use Illuminate\Database\Seeder;

class UneSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('unes')->insert([
          'numeroune'=>'1',
          'nombre'=>'CHEVROLET KABAH',
          'direccion'=>'AVENIDA KABAH SM X POR Y',
          'inventariopuestos'=>'86',
          'estatus'=>'1',
      ]);
      DB::table('unes')->insert([
          'numeroune'=>'2',
          'nombre'=>'CHEVROLET COBAH',
          'direccion'=>'AVENIDA COBA SM ',
          'inventariopuestos'=>'35',
          // 'estatus'=>'1',
      ]);
    }
}
