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
            'body' => 'Hi there.',
        ]);
        DB::table('comments')->insert([
            'user_id' => '2',
            'body' => 'Hi there.',
        ]);
        DB::table('comments')->insert([
            'user_id' => '1',
            'body' => 'Hi there.',
        ]);
    }
}
