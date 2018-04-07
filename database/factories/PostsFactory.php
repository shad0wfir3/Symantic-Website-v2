<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4,true),
        'excerpt' => $faker->text(200),
        'content' => $faker->randomHtml(),
        'tags' => json_encode(['tag','development','design']),
        'author_id' => 1,
        'featured_img' => $faker->imageUrl(1920,1080),
        'status' => $faker->randomElement(['draft','published','archived','unpublished']),
        'published_date' => null
    ];
});
