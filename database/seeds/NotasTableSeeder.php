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
            'titulo' => 'titulo',
            'descricao' => 'descricao',
            'data' => '20/4/2020',
        ]);
    }
}
