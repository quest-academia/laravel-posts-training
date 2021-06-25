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
            'password' => bcrypt('testaa'),
        ]);
        DB::table('users')->insert([
            'name' => '小島よしお',
            'email' => 'bb@bb.com',
            'password' => bcrypt('testbb'),
        ]);
        DB::table('users')->insert([
            'name' => 'ケインこすぎ',
            'email' => 'cc@cc.com',
            'password' => bcrypt('testcc'),
        ]);
        DB::table('users')->insert([
            'name' => '大谷翔平',
            'email' => 'dd@dd.com',
            'password' => bcrypt('testdd'),
        ]);
        DB::table('users')->insert([
            'name' => '小笠原道大',
            'email' => 'ee@ee.com',
            'password' => bcrypt('testee'),
        ]);
    }
}
