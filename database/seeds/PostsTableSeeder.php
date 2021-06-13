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
        $faker = Faker\Factory::create('ja_JP');

        for($i = 1; $i <= 5;$i++){
            DB::table('posts')->insert([
                //userテーブルと紐づいた際にコメントアウトを解除する
                //'user_id' => $i,
                'title' => 'title'.$i,
                'body' => $faker->text
            ]);
        }

    }
}
