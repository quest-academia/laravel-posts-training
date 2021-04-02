<?php

use Illuminate\Database\Seeder;
use App\Database;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run()
    {
      $this->call(CommentsTableSeeder::class);
      $this->call(UsersTableSeeder::class);
      $this->call(PostsTableSeeder::class);
    }
  }
