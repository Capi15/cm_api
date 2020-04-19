<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            'titulo' => 'titulo1',
            'descricao' => 'descricao1',
            'data' => '21/4/2020',
            'localizacao' => '20.001,20.002'
        ]);

        DB::table('notas')->insert([
            'titulo' => 'titulo2',
            'descricao' => 'descricao2',
            'data' => '22/4/2020',
            'localizacao' => '20.001,20.002'
        ]);

        DB::table('notas')->insert([
            'titulo' => 'titulo3',
            'descricao' => 'descricao3',
            'data' => '23/4/2020',
            'localizacao' => '20.001,20.002'
        ]);

        DB::table('notas')->insert([
            'titulo' => 'titulo4',
            'descricao' => 'descricao4',
            'data' => '24/4/2020',
            'localizacao' => '20.001,20.002'
        ]);
    }
}
