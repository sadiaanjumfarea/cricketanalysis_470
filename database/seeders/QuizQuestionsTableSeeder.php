<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('quiz_questions')->insert([
        ['question' => 'Is the sky blue?', 'answer' => 'yes'],
        ['question' => 'Is the sun green?', 'answer' => 'no'],
        // Add more questions and answers as needed
    ]);
}

}
