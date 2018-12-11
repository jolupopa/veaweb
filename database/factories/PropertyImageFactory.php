<?php

use Faker\Generator as Faker;

$factory->define(App\PropertyImage::class, function (Faker $faker) {
	return [
		'image' => 'http://lorempixel.com/640/480/',
		'title' => $faker->sentence,
		'excerpt' => $faker->text,
		'property_id' => $faker->numberBetween(1, 20),
	];
});
