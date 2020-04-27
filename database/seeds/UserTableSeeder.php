<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@ipvc.pt',
            'password' => Hash::make('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@ipvc.pt',
            'password' => Hash::make('87654321')
        ]);

        DB::table('users')->insert([
            'name' => 'user3',
            'email' => 'user3@ipvc.pt',
            'password' => Hash::make('password')
        ]);
    }
}
