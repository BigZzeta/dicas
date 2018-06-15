<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class departamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('departamentos')->insert([
            'nombre'=>'Ventas',
            'descripcion'=>'Contiene los pues de vendedores',
            'condicion'=>'1'
        ]);

        DB::table('departamentos')->insert([
            'nombre'=>'Contabilidad',
            'descripcion'=>'departamento de contabilidad',
            'condicion'=>'1'
        ]);

        DB::table('departamentos')->insert([
            'nombre'=>'Sistemas',
            'descripcion'=>'departamento de contabilidad',
            'condicion'=>'1'
        ]);

        DB::table('departamentos')->insert([
            'nombre'=>'Refacciones',
            
            'condicion'=>'1'
        ]);
       
       
    }
}
