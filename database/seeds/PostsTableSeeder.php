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
            'title' => 'title1',
            'body' => 'Hello World!',
            'user_id' => 1
        ]);
        DB::table('posts')->insert([
            'title' => 'title2',
            'body' => 'Nice to meet you!',
            'user_id' => 2
        ]);
    }
}
