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
            'title' => 'sample1',
            'body' => 'aaa', 
        ]);

        DB::table('posts')->insert([
            'title' => 'sample2',
            'body' => 'bbb', 
        ]);

        DB::table('posts')->insert([
            'title' => 'sample3',
            'body' => 'ccc', 
        ]);

        DB::table('posts')->insert([
            'title' => 'sample4',
            'body' => 'ddd', 
        ]);

        DB::table('posts')->insert([
            'title' => 'sample5',
            'body' => 'eee', 
        ]);
    }
}
