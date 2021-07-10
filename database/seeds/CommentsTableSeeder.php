<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'user_id' => '1',
            'message' => 'sample1',
            'post_user_id' => '1',
            'post_comment_id' => '1'
        ]);
        DB::table('comments')->insert([
            'user_id' => '2',
            'message' => 'sample2',
            'post_user_id' => '2',
            'post_comment_id' => '2'
        ]);
        DB::table('comments')->insert([
            'user_id' => '3',
            'message' => 'sample3',
            'post_user_id' => '3',
            'post_comment_id' => '3'
        ]);
    }
}
