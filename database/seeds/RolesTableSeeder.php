<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'type' => 'admin'
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'type' => 'author'
        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'type' => 'user'
        ]);
    }
}
