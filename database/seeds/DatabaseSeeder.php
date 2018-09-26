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
            'cat_departamentos',
            'users',
            'cat_entidad_federativa',
            'puestos',
            'pagadora',
            'periodos',
            'unes',
            'empresas',
            'horario',
            'empleados'
        ]);

        $this->call(departamentosSeeder::class);
        $this->call(userSeeder::class);
        $this->call(cat_entidad_federativa::class);
        $this->call(EmpresaSeeder::class);
        $this->call(PuestosSeeder::class);
        $this->call(PagadoraSeeder::class);
        $this->call(PeriodoSeeder::class);
        $this->call(UneSeeders::class);
        $this->call(HorarioSeeder::class);
        $this->call(empleadosSeeder::class);

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
