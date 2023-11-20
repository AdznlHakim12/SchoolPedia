<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'          => 'Ahmad Dare',
            'email'         => 'dare@gmail.com',
            'password'      => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name'          => 'Adzinul Hakim',
            'email'         => 'Adzi@gmail.com',
            'password'      => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name'          => 'Martvelino Tri',
            'email'         => 'Avel@gmail.com',
            'password'      => bcrypt('123456'),
        ]);
    }
}
