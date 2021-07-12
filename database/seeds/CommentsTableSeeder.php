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
        // 2021/07/12 forで多くのダミーデータを作成できるよう修正(実務で使用する)
        for ($i = 1; $i <= 10; $i++) 
        {
            DB::table('comments')->insert([
                'user_id' => $i,
                'message' => 'sample' . $i,
                'post_id' => $i,
                // 2021/07/12 commentsテーブルから「post_comment_id」を削除したため、コメントアウト
                // 'post_comment_id' => $i
            ]);
        }
    }
}
