<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'nombre'=>'SIAS',
            'direccion'=>'Villahermosa Tab',
            'colonia'=>'Gaviotas',
            'codigopostal'=>'00101',
            'telefono1'=>'9934560012',
            'siglas'=>'SIAS'
        ]);
    }
}
