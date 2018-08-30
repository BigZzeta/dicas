<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dd('departamentoSeeder');
        $this->truncateTables([
            'departamentos',
            'users',
            'empleados',
            'cat_entidad_federativa'
        ]);

        $this->call(departamentosSeeder::class);
        $this->call(userSeeder::class);
        $this->call(empleadosSeeder::class);
        $this->call(cat_entidad_federativa::class);

    }
    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table){
            DB::table($table)->truncate();
        }


    DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }

}
