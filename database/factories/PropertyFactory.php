<?php

use Faker\Generator as Faker;

$factory->define(App\Property::class, function (Faker $faker) {
	return [
		'title' => $faker->name,
		'excerpt' => $faker->sentence,
		'detail' => $faker->text,
		'address' => $faker->address,
		'zone' => $faker->randomElement(['El Golf', 'Huanchaco', 'California', 'Primavera']),
		'departamento' => $faker->randomElement(['La Libertad', 'Lambayeque', 'Cajamarca', 'Piura']),
		'provincia' => $faker->randomElement(['Trujillo', 'Pacasmayo', 'Viru', 'San pedro']),
		'distrito' => $faker->randomElement(['Trujillo', 'Huanchaco', 'La Esperanza', 'Laredo']),
		'operacion' => $faker->randomElement(['alquiler', 'venta', 'alquiler-venta', 'traspaso']),
		'price_contrato' => $faker->randomFloat(2, 5, 2500),
		'comision' => 3,
		'price' => $faker->randomFloat(2, 5, 1500),

		'full-area' => 2500,
		'build-area' => 2000,
		'owner' => $faker->name,
		'captador' => $faker->name,
		'agent' => $faker->name,
		'cocheras' => 1,
		'bathroon' => 3,
		'bedroon' => 2,
		'category_id' => $faker->numberBetween(1, 5),
		'city_id' => $faker->numberBetween(1, 9),
	];
});
