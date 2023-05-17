<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'collection_id' => 1,
                'question' => 'What lang for AI?',
                'correct_answers' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'collection_id' => 1,
                'question' => 'What lang for Android?',
                'correct_answers' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'collection_id' => 2,
                'question' => 'He __ a teacher.',
                'correct_answers' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'collection_id' => 2,
                'question' => "How many Ballon D'OR's have CR7?",
                'correct_answers' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'collection_id' => 3,
                'question' => '2+2*2=',
                'correct_answers' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'collection_id' => 3,
                'question' => '88-85=',
                'correct_answers' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('questions')->insert($questions);
    }
}
