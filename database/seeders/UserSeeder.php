<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'muklisin',
            'email' => 'muklisin@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'sutejo',
            'email' => 'sutejo@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'putri',
            'email' => 'putri@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
