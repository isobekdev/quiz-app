<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            [
                'name'=>'Isobek Naurizov',
                'phone'=>'+998913897677',
                'email'=>'inavruzov777@gmail.com',
                'password'=>Hash::make(0077),
                'is_premium'=>true,
                'is_admin'=>true,
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'name'=>'Allayar Maksetov',
                'phone'=>'+998905767225',
                'email'=>'allayarmaksetov@gmail.com',
                'password'=>Hash::make(7225),
                'is_premium'=>true,
                'is_admin'=>false,
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            ];
            DB::table('users')->insert($users);
    }
}
