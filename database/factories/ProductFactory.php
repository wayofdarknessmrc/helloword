<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
      'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
      'image' => '',
      'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
      'content' => $faker->text($maxNbChars = 1000),
      'status' => 'active',
      'stock_manage' => 1,
      'sell' => $faker->numberBetween(20,100),
      'view' => $faker->numberBetween(200,1000),
      'rating' => $faker->numberBetween(1,5),
      'priority' => $faker->numberBetween(1,100),
      'tags' => '',
      'template' => '',
      'stock_quant' => $faker->numberBetween(1,1000),
      'like' => $faker->numberBetween(1,1000),
      'dislike' => $faker->numberBetween(1,100),
      'price' => $faker->randomNumber()
    ];
});
