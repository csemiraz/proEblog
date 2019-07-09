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
            'role_id' => 1,
            'name' => 'Mr. Admin',
            'email' => 'admin@gmail.com',
            'password' => 'rootadmin',
            'about' => 'This is admin here'
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Mr. Author',
            'email' => 'author@gmail.com',
            'password' => 'rootauthor',
            'about' => 'This is author here'
        ]);

        DB::table('users')->insert([
            'role_id' => 3,
            'name' => 'Mr. User',
            'email' => 'user@gmail.com',
            'password' => 'rootuser',
            'about' => 'This is user here'
        ]);

    }
}
