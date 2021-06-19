<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
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
