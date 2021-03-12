<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'VueQuest',
            'body' => 'Vue.js講座',
            'created_at' => '2020-05-20'
        ]);
        DB::table('posts')->insert([
            'title' => 'VueQuest',
            'body' => 'Vue.js講座',
            'created_at' => '2020-05-20'
        ]);
        DB::table('posts')->insert([
            'title' => 'VueQuest',
            'body' => 'Vue.js講座',
            'created_at' => '2020-05-20'
        ]);
        DB::table('posts')->insert([
            'title' => 'LaravelQuest',
            'body' => 'Laravel講座',
            'created_at' => '2020-05-20'
        ]);
    }
}
