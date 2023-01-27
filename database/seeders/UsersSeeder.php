<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('users')->insert([
            'role_id'  => '1',
            'name'     => 'Mr. Admin',
            'username' => 'Admin',
            'email'    => 'admin@blog.com',
            'password' => bcrypt('rootadmin')
        ]);

        DB::table('users')->insert([
            'role_id'  => '2',
            'name'     => 'Mr. Author',
            'username' => 'Author',
            'email'    => 'author@blog.com',
            'password' => bcrypt('rootauthor')
        ]);
    }
}
