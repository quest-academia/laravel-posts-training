<?php

use App\User;
use App\Post;
use App\Comment;
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
        DB:: table('comments')->insert([
            'comment' => 'おはようございます',
            'user_id' => App\User::find(1),
            'post_id' => App\Post::find(1),
        ]);
        DB:: table('comments')->insert([
            'comment' => 'こんにちは',
            'user_id' => App\User::find(2),
            'post_id' => App\Post::find(2),
        ]);
        DB:: table('comments')->insert([
            'comment' => 'こんばんは',
            'user_id' => App\User::find(3),
            'post_id' => App\Post::find(3),
        ]);

    }
}
