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
            'title' => 'VueQuest',
            'text' => 'Vue.js講座',
            'created_at' => '2020-05-20'
        ]);
        DB::table('users')->insert([
            'title' => 'VueQuest',
            'text' => 'Vue.js講座',
            'created_at' => '2020-05-20'
        ]);
        DB::table('users')->insert([
            'title' => 'VueQuest',
            'text' => 'Vue.js講座',
            'created_at' => '2020-05-20'
        ]);
        DB::table('users')->insert([
            'title' => 'LaravelQuest',
            'text' => 'Laravel講座',
            'created_at' => '2020-05-20'
        ]);
    }
}
