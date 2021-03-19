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
        DB::table('posts')->insert([
        'title'=>'Laravel',
        'body'=>'Laravel-Quest',
        ]);

        DB::table('posts')->insert([
        'title'=>'Laravel02',
        'body'=>'Laravel-Quest02',
        ]);

        DB::table('posts')->insert([
        'title'=>'Laravel03',
        'body'=>'Laravel-Quest03',
        ]);

        DB::table('posts')->insert([
        'title'=>'Laravel04',
        'body'=>'Laravel-Quest04',
        ]);
    }
}
