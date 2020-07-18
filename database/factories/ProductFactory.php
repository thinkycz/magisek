<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'        => $faker->words(3, true),
        'description' => $faker->sentences(3, true),
        'details'     => $faker->sentences(3, true),
        'catalog'     => $faker->isbn10,
        'barcode'     => $faker->isbn13,
    ];
});
