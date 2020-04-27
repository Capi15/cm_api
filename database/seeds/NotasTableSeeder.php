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
        $user1 = DB::table('users')->select('id')->where('email', '=', 'user1@ipvc.pt')->first();
        $user2 = DB::table('users')->select('id')->where('email', '=', 'user2@ipvc.pt')->first();
        $user3 = DB::table('users')->select('id')->where('email', '=', 'user3@ipvc.pt')->first();
        DB::table('notas')->insert([
            'titulo' => 'titulo1',
            'descricao' => 'descricao1',
            'foto' => Str::random(10),
            'latitude' => 1.768,
            'longitude' => 1.768,
            'user_id' => $user1->id
        ]);

        DB::table('notas')->insert([
            'titulo' => 'titulo2',
            'descricao' => 'descricao2',
            'foto' => Str::random(10),
            'latitude' => 3.768,
            'longitude' => 3.768,
            'user_id' => $user2->id
        ]);

        DB::table('notas')->insert([
            'titulo' => 'titulo3',
            'descricao' => 'descricao3',
            'foto' => Str::random(10),
            'latitude' => 3.768,
            'longitude' => 1.768,
            'user_id' => $user3->id
        ]);
    }
}
