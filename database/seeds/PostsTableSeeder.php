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
          'created_at'=>'2021-03-27'
        ]);

        DB::table('posts')->insert([
          'title'=>'Laravel02',
          'body'=>'Laravel-Quest02',
          'created_at'=>'2021-03-27'
        ]);

        DB::table('posts')->insert([
          'title'=>'Laravel03',
          'body'=>'Laravel-Quest03',
          'created_at'=>'2021-03-27'
        ]);

        DB::table('posts')->insert([
          'title'=>'Laravel04',
          'body'=>'Laravel-Quest04',
          'created_at'=>'2021-03-27'
        ]);

    }

}
