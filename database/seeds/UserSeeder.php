<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'full_name' => 'Juan',
        ]);
        DB::table('users')->insert([
            'full_name' => 'Elisa',
        ]);
        DB::table('users')->insert([
            'full_name' => 'Jorge',
        ]);
        DB::table('users')->insert([
            'full_name' => 'Alejandro',
        ]);
        DB::table('users')->insert([
            'full_name' => 'Maria',
        ]);
    }
}
