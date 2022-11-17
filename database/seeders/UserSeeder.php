<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(){

        DB::table('users')->insert([
          [

              'name' => 'admin',
              'email' => 'admin12345@gmail.com',
              'password' => Hash::make('admin12345@gmail.com'),
              'created_at' => now(),
              'updated_at' => now() ,

          ]

        ]);
    }
}
