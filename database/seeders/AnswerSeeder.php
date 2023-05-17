<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answers = [
            [
                'question_id' => 1,
                'answer' => 'Python',
                'is_correct' => true,
            ],
            [
                'question_id' => 1,
                'answer' => 'Java',
                'is_correct' => false,
            ],
            [
                'question_id' => 1,
                'answer' => 'Ruby',
                'is_correct' => false,
            ],
            [
                'question_id' => 1,
                'answer' => 'Objective-C',
                'is_correct' => false,
            ],
            [
                'question_id' => 2,
                'answer' => 'Java',
                'is_correct' => true,
            ],
            [
                'question_id' => 2,
                'answer' => 'Python',
                'is_correct' => false,
            ],
            [
                'question_id' => 2,
                'answer' => 'Javascript',
                'is_correct' => false,
            ],
            [
                'question_id' => 2,
                'answer' => 'C#',
                'is_correct' => false,
            ],
            [
                'question_id' => 3,
                'answer' => 'is',
                'is_correct' => true,
            ],
            [
                'question_id' => 3,
                'answer' => 'a',
                'is_correct' => false,
            ],
            [
                'question_id' => 3,
                'answer' => 'or',
                'is_correct' => false,
            ],
            [
                'question_id' => 3,
                'answer' => 'are',
                'is_correct' => false,
            ],
            [
                'question_id' => 4,
                'answer' => '7',
                'is_correct' => false,
            ],
            [
                'question_id' => 4,
                'answer' => '8',
                'is_correct' => false,
            ],
            [
                'question_id' => 4,
                'answer' => '6',
                'is_correct' => false,
            ],
            [
                'question_id' => 4,
                'answer' => '5',
                'is_correct' => true,
            ],
            [
                'question_id' => 5,
                'answer' => '6',
                'is_correct' => true,
            ],
            [
                'question_id' => 5,
                'answer' => '8',
                'is_correct' => false,
            ],
            [
                'question_id' => 5,
                'answer' => '22',
                'is_correct' => false,
            ],
            [
                'question_id' => 5,
                'answer' => '4',
                'is_correct' => false,
            ],
            [
                'question_id' => 6,
                'answer' => '3',
                'is_correct' => true,
            ],
            [
                'question_id' => 6,
                'answer' => '6',
                'is_correct' => false,
            ],
            [
                'question_id' => 6,
                'answer' => '5',
                'is_correct' => false,
            ],
            [
                'question_id' => 6,
                'answer' => '888',
                'is_correct' => false,
            ],
        ];

        DB::table('answers')->insert($answers);
    }
}
