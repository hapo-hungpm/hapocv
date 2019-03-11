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
        for ($i = 0; $i < 10; $i++) {
            DB::table('system_management')->insert([
                'name' => 'Hung',
                'email' => Str::random(3) . '@haposoft.com',
                'password' => bcrypt('12345678'),
            ]);
        }
    }
}
