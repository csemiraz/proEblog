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
            'password' => bcrypt('rootadmin'),
            'about' => 'This is admin here'
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Mr. Author',
            'email' => 'author@gmail.com',
            'password' => bcrypt('rootauthor'),
            'about' => 'This is author here'
        ]);

        DB::table('users')->insert([
            'role_id' => 3,
            'name' => 'Mr. User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('rootuser'),
            'about' => 'This is user here'
        ]);

    }
}
