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
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('posts')->insert([
            'title' => 'sample2',
            'body' => 'bbb', 
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('posts')->insert([
            'title' => 'sample3',
            'body' => 'ccc', 
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('posts')->insert([
            'title' => 'sample4',
            'body' => 'ddd', 
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('posts')->insert([
            'title' => 'sample5',
            'body' => 'eee', 
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
