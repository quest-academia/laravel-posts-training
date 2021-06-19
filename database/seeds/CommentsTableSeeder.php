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
            'comment' => '最初のコメントです！',
            'user_id' => 1,
            'post_id' => 1
        ]);
 
        DB::table('comments')->insert([
            'comment' => '2つ目のコメントです！',
            'user_id' => 1,
            'post_id' => 1
        ]);
 
        DB::table('comments')->insert([ 
            'comment' => 'シーダによってテストデータを設定します．',
            'user_id' => 1,
            'post_id' => 1
        ]);
    }
}

