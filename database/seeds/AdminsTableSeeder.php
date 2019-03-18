<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('admins')->insert([
            'name' => 'Hung Admin',
            'email' => 'hungpm@haposoft.com',
            'password' => bcrypt('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Hung User',
            'email' => 'hungpm.hust@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

//        for ($i = 0; $i < 10; $i++) {
//            DB::table('admins')->insert([
//                'name' => 'Hung',
//                'email' => Str::random(3) . '@haposoft.com',
//                'password' => bcrypt('12345678'),
//            ]);
//        }
    }
}
