<?php

/** @var Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'content' => $faker->paragraph(10),
        'lead' => $faker->paragraph(2),
        'topic_id' => rand(1, 6),
        'user_id' => rand(1, 20),
    ];
});
