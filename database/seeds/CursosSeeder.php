<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('cursos')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('cursos')->insert([
            'nombrecurso' => 'Desarrollo Web',
            'año' => '2023',
            'ciclo' => '202350',
            'idprofesor' => '1',

        ]);

        DB::table('cursos')->insert([
            'nombrecurso' => 'Aplicaciones Web',
            'año' => '2023',
            'ciclo' => '202350',
            'idprofesor' => '1',

        ]);

        DB::table('cursos')->insert([
            'nombrecurso' => 'Aplicaciones Distribuidas',
            'año' => '2023',
            'ciclo' => '202350',
            'idprofesor' => '1',

        ]);
    }
}
