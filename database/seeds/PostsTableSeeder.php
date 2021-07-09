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
            'title'=> 'a',
            'message'=> 'a'
        ]);
        DB::table('posts')->insert([
            'title'=> 'b',
            'message'=> 'b'
        ]);
    }
}
