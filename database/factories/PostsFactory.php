<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker)
{
    return [
        'user_id' => factory(User::class)->create()->id,
        'title' => $faker->realText(10),
        'body' => $faker->realText(100),
    ];
});
