<?php

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
            'comment' => 'コメント１',
            'user_id' => 1,
            'post_id' => 1,
        ]);
    }
}
