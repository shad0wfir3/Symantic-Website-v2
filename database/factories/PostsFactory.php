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

    $title =  $faker->sentence(3,true);

    return [
        'title' => $title,
        'slug' => slugify($title),
        'excerpt' => $faker->text(200),
        'content' => $faker->randomHtml(),
        'author_id' => 1,
        'featured' => $faker->boolean(30),
        'featured_img' => '1523456824design page image',
        'published_date' => Carbon::now(),
        'status' => $faker->randomElement(['draft','published','archived','unpublished']),
    ];
});
