<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Departamento;

class departamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        factory(departamento::class,10)->create();

        // DB::table('departamentos')->insert([
        //     'numerodepartamento'=>1,
        //     'nombre'=>'CPA',
        //     'numempleados'=>20,
        //     // 'condicion'=>'1'
        // ]);



        // DB::table('departamentos')->insert([
        //     'nombre'=>'Ventas',
        //     'descripcion'=>'Contiene los puestos de vendedores',
        //     'condicion'=>'1'
        // ]);
        //
        // DB::table('departamentos')->insert([
        //     'nombre'=>'Contabilidad',
        //     'descripcion'=>'departamento de contabilidad',
        //     'condicion'=>'1'
        // ]);
        //
        // DB::table('departamentos')->insert([
        //     'nombre'=>'Sistemas',
        //     'descripcion'=>'departamento de contabilidad',
        //     'condicion'=>'1'
        // ]);
        //
        // DB::table('departamentos')->insert([
        //     'nombre'=>'Refacciones',
        //
        //     'condicion'=>'1'
        // ]);


    }
}
