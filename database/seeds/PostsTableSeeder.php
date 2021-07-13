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
         for ($i = 1; $i <= 3; $i++) {
            Comment::create([
                'user_id' => 1,
                'title' => 'これはテストタイトル' .$i,
                'text' => 'これはテスト本文' .$i,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
