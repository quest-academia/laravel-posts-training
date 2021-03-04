<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'title' => 'LaravelQuest',
            'text' => 'Laravel講座'
        ]);
        DB::table('users')->insert([
            'title' => 'AWSQuest',
            'text' => 'AWS講座'
        ]);
        DB::table('users')->insert([
            'title' => 'PHPQuest',
            'text' => 'PHP講座'
        ]);
        DB::table('users')->insert([
            'title' => 'VueQuest',
            'text' => 'Vue.js講座'
        ]);
    }
}
