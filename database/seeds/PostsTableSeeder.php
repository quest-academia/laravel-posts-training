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
            'user_id'=>'1',
            'title'=> 'a',
            'message'=> 'a'
        ]);
        DB::table('posts')->insert([
            'user_id'=>'2',
            'title'=> 'b',
            'message'=> 'b'
        ]);
    }
}
