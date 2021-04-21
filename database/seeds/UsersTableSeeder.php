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
            'name' => "テスト１",
            'email' => "test1@example.com",
            'password' => bcrypt('secret'),
            'name' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => "テスト2",
            'email' => "test2@example.com",
            'password' => bcrypt('secret'),
            'name' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => "テスト3",
            'email' => "test3@example.com",
            'password' => bcrypt('secret'),
            'name' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => "テスト4",
            'email' => "test4@example.com",
            'password' => bcrypt('secret'),
            'name' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => "テスト5",
            'email' => "test5@example.com",
            'password' => bcrypt('secret'),
            'name' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
