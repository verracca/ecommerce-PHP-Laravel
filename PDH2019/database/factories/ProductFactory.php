<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use App\Category;
use App\User;

$factory->define(Product::class, function (Faker $faker) {
    $path = storage_path('app/public/product');
    return [
      'name' => $faker->sentence(6),
      'description' => $faker->paragraph(4),
      'category_id' => Category::all()->random()->id,
      'featuredimg'=> $faker->image($path, 200, 200, 'abstract', false),
      'price' => $faker->randomFloat(2, 2, 8),
      'stock' => rand(1,30),
      'user_id'=> User::all()->random()->id, // Ver si necesitamos crear este dato en productos
    ];
});
