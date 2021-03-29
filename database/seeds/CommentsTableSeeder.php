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
            'comment' => 'あいうえお',
            'user_id' => 1,
            'post_id' => 1,
        ]);
        DB:: table('comments')->insert([
            'comment' => 'かきくけこ',
            'user_id' => 2,
            'post_id' => 2,
        ]);
        DB:: table('comments')->insert([
            'comment' => 'さしすせそ',
            'user_id' => 3,
            'post_id' => 3,
        ]);

    }
}
