<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(16),
        'body' => $faker->realText(100),
        'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
    ];
});
