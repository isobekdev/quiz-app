<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=[
            [
                'name'=>'Programming',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'English',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Mathematics',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Physics',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'History',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Computer Engineering',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ];
        DB::table('categories')->insert($categories);
    }
}
