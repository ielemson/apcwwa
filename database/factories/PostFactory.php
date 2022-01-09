<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_title' => $faker->sentence(),
        'post_slug' => Str::slug($faker->sentence().'-'.Str::random(5), '-'),
        'post_body' => $faker->paragraph(),
        'featured_image' => $faker->imageUrl($width = 840, $height = 580),
        'status' => 1,
        'category_id' => App\Category::all()->random()->id,
        'user_id' => App\User::all()->random()->id,
    ];
});
