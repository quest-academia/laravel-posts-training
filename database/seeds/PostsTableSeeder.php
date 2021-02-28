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
            'text' => 'aaa', 
        ]);

        DB::table('posts')->insert([
            'title' => 'sample2',
            'text' => 'bbb', 
        ]);

        DB::table('posts')->insert([
            'title' => 'sample3',
            'text' => 'ccc', 
        ]);

        DB::table('posts')->insert([
            'title' => 'sample4',
            'text' => 'ddd', 
        ]);

        DB::table('posts')->insert([
            'title' => 'sample5',
            'text' => 'eee', 
        ]);
    }
}
