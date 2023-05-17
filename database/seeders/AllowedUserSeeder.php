<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllowedUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allowed_user=[
            [
                'user_id'=>'1',
                'collection_id'=>'3'
            ],
            [
                'user_id'=>'2',
                'collection_id'=>'3'
            ],
            [
                'user_id'=>'3',
                'collection_id'=>'3'
            ],
        ];
        DB::table('allowed_users')->insert($allowed_user);
    }
}
