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
            'comment' => 'Hi!',
            'post_id' => 1,
            'user_id' => 2
        ]);
        DB::table('comments')->insert([
            'comment' => 'Yes!',
            'post_id' => 2,
            'user_id' => 3
        ]);
    }
}
