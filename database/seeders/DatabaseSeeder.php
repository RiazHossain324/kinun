<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstName' => 'Riaz',
            'lastName' => 'Hossain',
            'userName' => 'Riaz324',
            'email' => 'rzhossain324@gmail.com',
            'password' => Hash::make('123456'),
            'isAdmin' => 1,
            'birthdate' => date("Y-m-d H:i:s"),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
