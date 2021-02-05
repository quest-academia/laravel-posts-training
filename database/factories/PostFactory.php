<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title'=>'SkillHacks',
        'body'=>'WEBアプリ開発講座',
    ];
});
