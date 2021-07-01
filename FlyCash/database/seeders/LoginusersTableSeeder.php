<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LoginusersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loginusers')->insert([
            'id' => 1,
            'name' => 'joy',
            'email' => 'joy@gmail.com.com',
            
            'type' => 'customer',

            'password' => '1234567',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('loginusers')->insert([
            'id' => 2,
            'name' => 'Borno',
            'email' => 'Borno@gmail.com',
            'type' => 'agent',
            'password' => '12345678',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
