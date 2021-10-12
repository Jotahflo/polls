<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        DB::table('questions')->insert([
            'title' => '1. Ingrese su nombre',
            'type_question' => 1,
        ]);
        DB::table('questions')->insert([
            'title' => '2. Eliga su genero',
            'type_question' => 2,
        ]);
        DB::table('questions')->insert([
            'title' => '3. ¿Tiene algún hobby?',
            'type_question' => 3,
        ]);
        DB::table('questions')->insert([
            'title' => '4. A su hobby, ¿cuánto tiempo le dedica al mes?',
            'type_question' => 4,
        ]);
    }
}
