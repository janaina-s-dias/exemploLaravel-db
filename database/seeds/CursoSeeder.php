<?php

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert(['sigla'=>'ADS','nome'=>'Analise e Desenvoolvimento de Sistemas']);
        DB::table('cursos')->insert(['sigla'=>'COMEX','nome'=>'Comércio Exterior']);
    }
}
