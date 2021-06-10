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
            'name' => '鈴木一郎',
            'email' => 'aa@aa.com',
            'password' => bcrypt('testaa')
        ]);
        DB::table('users')->insert([
            'name' => '小島よしお',
            'email' => 'bb@bb.com',
            'password' => bcrypt('testbb')
        ]);
    }
}
