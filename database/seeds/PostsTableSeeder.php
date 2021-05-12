<?php

use Illuminate\Database\Seeder;
use App\Post;

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
            'user_id' => '1',
            'title' => 'sample1',
            'body' => 'Hello world' 
        ]);
        DB::table('posts')->insert([
            'user_id' => '1',
            'title' => 'sample2',
            'body' => 'Hello world' 
        ]);
        DB::table('posts')->insert([
            'user_id' => '1',
            'title' => 'sample3',
            'body' => 'Hello world' 
        ]);
    }
}
