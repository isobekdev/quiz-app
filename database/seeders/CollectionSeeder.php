<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $collections=[
            [
                'category_id'=>1,
                'user_id'=>1,
                'name'=>'Elementary Programming',
                'description'=>'This collection for programming',
                'code'=>1,
                'allowed_type'=>'public',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'category_id'=>2,
                'user_id'=>2,
                'name'=>'Elementary English',
                'description'=>'This collection for English',
                'code'=>2,
                'allowed_type'=>'url',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'category_id'=>3,
                'user_id'=>3,
                'name'=>'Elementary Mathematics',
                'description'=>'This collection for Elementry Math',
                'code'=>3,
                'allowed_type'=>'limited users',
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        ];

        DB::table('collections')->insert($collections);
    }
}
