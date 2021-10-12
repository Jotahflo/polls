<?php

use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{

    public function run()
    {
        DB::table('answers')->insert([
            'id_question' => 2,
            'id_user' => 1,
            'content' => 'Hombre',
        ]);
        DB::table('answers')->insert([
            'id_question' => 3,
            'id_user' => 1,
            'content' => 'Juegos',
        ]);
        DB::table('answers')->insert([
            'id_question' => 4,
            'id_user' => 1,
            'content' => 5,
        ]);

        DB::table('answers')->insert([
            'id_question' => 2,
            'id_user' => 2,
            'content' => 'Mujer',
        ]);
        DB::table('answers')->insert([
            'id_question' => 3,
            'id_user' => 2,
            'content' => 'Ninguno',
        ]);
        DB::table('answers')->insert([
            'id_question' => 4,
            'id_user' => 2,
            'content' => 0,
        ]);

        DB::table('answers')->insert([
            'id_question' => 2,
            'id_user' => 3,
            'content' => 'Hombre',
        ]);
        DB::table('answers')->insert([
            'id_question' => 3,
            'id_user' => 3,
            'content' => 'Cocina',
        ]);
        DB::table('answers')->insert([
            'id_question' => 4,
            'id_user' => 3,
            'content' => 10,
        ]);

        DB::table('answers')->insert([
            'id_question' => 2,
            'id_user' => 4,
            'content' => 'Hombre',
        ]);
        DB::table('answers')->insert([
            'id_question' => 3,
            'id_user' => 4,
            'content' => 'Modelismo',
        ]);
        DB::table('answers')->insert([
            'id_question' => 4,
            'id_user' => 4,
            'content' => 2,
        ]);

        DB::table('answers')->insert([
            'id_question' => 2,
            'id_user' => 5,
            'content' => 'Mujer',
        ]);
        DB::table('answers')->insert([
            'id_question' => 3,
            'id_user' => 5,
            'content' => 'Cine',
        ]);
        DB::table('answers')->insert([
            'id_question' => 4,
            'id_user' => 5,
            'content' => 3,
        ]);
    }
}
