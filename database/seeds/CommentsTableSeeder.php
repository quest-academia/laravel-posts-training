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
        for ($i = 1; $i <= 5; $i++) {
            DB::table('comments')->insert([
                [
                    'user_id' => rand(1, 10),
                    'post_id' => rand(1, 3),
                    'comment' => "コメント{$i}-1",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => rand(1, 10),
                    'post_id' => rand(1, 3),
                    'comment' => "コメント{$i}-2",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => rand(1, 10),
                    'post_id' => rand(1, 3),
                    'comment' => "コメント{$i}-3",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]);
        }
    }
}
