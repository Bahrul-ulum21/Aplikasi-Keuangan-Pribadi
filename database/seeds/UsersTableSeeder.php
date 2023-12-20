<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'full_name'  => 'Tim_Capstone',
            'email'      => 'capstontim@gmail.com',
            'username'   => 'admin',
            'role'       => 'admmin',
            'password'   => bcrypt('admin'),
            'avatar'     => '898192462.png'
        ]);
        DB::table('users')->insert([
            'full_name'  => 'user',
            'email'      => 'user@gmail.com',
            'username'   => 'user',
            'role'       => 'user',
            'password'   => bcrypt('user'),
            'avatar'     => '898192462.png'
        ]);
    }
}
