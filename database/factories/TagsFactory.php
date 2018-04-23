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

$factory->define(App\Tag::class, function (Faker $faker) {

    $title = $faker->unique()->randomElement(['design','development','graphic','ux','print','unique','chaos','tag_2','more']);

    return [
        'title' => $title,
        'slug' => slugify($title)
    ];
});
