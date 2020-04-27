<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'foto' => Str::random(10),
            'latitude' => 1.768,
            'longitude' => 1.768,
            'user_id' => 1
        ]);

        DB::table('notas')->insert([
            'titulo' => 'titulo2',
            'descricao' => 'descricao2',
            'foto' => Str::random(10),
            'latitude' => 3.768,
            'longitude' => 3.768,
            'user_id' => 2
        ]);

        DB::table('notas')->insert([
            'titulo' => 'titulo3',
            'descricao' => 'descricao3',
            'foto' => Str::random(10),
            'latitude' => 3.768,
            'longitude' => 1.768,
            'user_id' => 3
        ]);
    }
}
