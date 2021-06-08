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
            'name' => 'aa',
            'email' => 'aa@aa.com',
            'password' => bcrypt('testaa')
        ]);
        DB::table('users')->insert([
            'name' => 'bb',
            'email' => 'bb@bb.com',
            'password' => bcrypt('testbb')
        ]);
    }
}