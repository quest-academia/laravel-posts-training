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
            'post_id' => '4',
            'body' => 'Hi there.',
        ]);
        DB::table('comments')->insert([
            'user_id' => '2',
            'post_id' => '7',
            'body' => 'Hi there.',
        ]);
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '9',
            'body' => 'Hi there.',
        ]);
    }
}
