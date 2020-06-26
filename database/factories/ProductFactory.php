<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
$factory->define(product::class, function (Faker $faker) {
    return [
        'name' => Str::random(20),
        'url_image' => rand(1, 5),
        'price' => rand(1, 500),
        'type_id' => rand(1, 5),
    ];
});
