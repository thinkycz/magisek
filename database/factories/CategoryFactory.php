<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Category;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});

$factory->afterCreating(Category::class, function (Category $category) {
    factory(Product::class, 3)
        ->create()
        ->each(fn(Product $product) => $product->categories()->attach($category));
});
