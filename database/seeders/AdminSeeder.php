<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'admin@addisbook.com',
            'tel' => '11111111',
            'password' => bcrypt('password'),
            'photo' => '/images/avatar.png',
        ]);
    }
}
