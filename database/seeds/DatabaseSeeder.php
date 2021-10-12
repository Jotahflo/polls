<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(QuestionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AnswerSeeder::class);
    }
}
