<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Post;
use App\Comment;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class)->create()->id,
        'post_id' => factory(Post::class)->create()->id,
        'comment' => $faker->realText(40),
    ];
});

//$factory->define(App\Comment::class, function (Faker $faker) {
//    $userId = App\User::pluck('id')->all();
//    $postId = App\Post::pluck('id')->all();

//    $comment = new Comment();

//    return [
//        'user_id' => $faker->randomElement($userId),
//        'post_id' => $faker->randomElement($postId),
//        'comment' => $faker->realText(100),
//    ];
//});
