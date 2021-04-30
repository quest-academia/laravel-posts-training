<?php

use App\User;
use App\Post;
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
        factory(App\Comment::class, 15)->create();
        //DB::table('comments')->insert([
        //    'user_id' => 'User::',
        //    'title' => 'sample1',
        //    'body' => 'sample1'
        //])
    }
}
