<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'title' => $faker->realText(50),
        'body' => $faker->realText(100),
    ];
});
