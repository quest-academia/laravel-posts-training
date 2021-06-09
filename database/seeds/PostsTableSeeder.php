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
	    'title' => 'test1',
	    'body' => 'testbody1'
	]);
	DB::table('posts')->insert([
            'title' => 'test2',
            'body' => 'testbody2'
        ]);
	DB::table('posts')->insert([
            'title' => 'test3',
            'body' => 'testbody3'
        ]);
	DB::table('posts')->insert([
            'title' => 'test4',
            'body' => 'testbody4'
        ]);
	DB::table('posts')->insert([
            'title' => 'test5',
            'body' => 'testbody5'
        ]);	
    }
}
