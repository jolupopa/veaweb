<?php

use App\Category;
use App\City;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		User::create([
			'name' => 'admin',
			'email' => 'admin@gmail.com',
			'password' => bcrypt('secret'),
			'remember_token' => str_random(10),
		]);

		Category::create([
			'category_name' => 'Casa',
			'category_slug' => 'casa',
			'category_description' => 'Casas de todo tipo',
		]);

		Category::create([
			'category_name' => 'Departamentos',
			'category_slug' => 'departamentos',
			'category_description' => 'Departamentos de todo tipo',
		]);

		Category::create([
			'category_name' => 'Terreno',
			'category_slug' => 'terreno',
			'category_description' => 'Terrenos de todo tipo',
		]);

		Category::create([
			'category_name' => 'Local Comercial',
			'category_slug' => 'local-comercial',
			'category_description' => 'Local Comerciales de todo tipo',
		]);

		Category::create([
			'category_name' => 'Condominio',
			'category_slug' => 'condominio',
			'category_description' => 'Condominios de todo tipo',
		]);

		City::create([
			'city_name' => 'Trujillo',
			'city_slug' => 'trujillo',
			'image' => 'image/cities/trujillo.jpg',
		]);

		City::create([
			'city_name' => 'Piura',
			'city_slug' => 'piura',
			'image' => 'image/cities/piura.jpg',
		]);

		City::create([
			'city_name' => 'Chiclayo',
			'city_slug' => 'chiclayo',
			'image' => 'image/cities/chiclayo.jpg',
		]);

		City::create([
			'city_name' => 'Lima',
			'city_slug' => 'lima',
			'image' => 'image/cities/lima.jpg',
		]);

		City::create([
			'city_name' => 'Arequipa',
			'city_slug' => 'arequipa',
			'image' => 'image/cities/arequipa.jpg',
		]);

		City::create([
			'city_name' => 'Tumbes',
			'city_slug' => 'tumbes',
			'image' => 'image/cities/tumbes.jpg',
		]);

		City::create([
			'city_name' => 'Chimbote',
			'city_slug' => 'chimbote',
			'image' => 'image/cities/chimbote.jpg',

		]);

		City::create([
			'city_name' => 'Cajamarca',
			'city_slug' => 'cajamarca',
			'image' => 'image/cities/cajamarca.jpg',
		]);

		City::create([
			'city_name' => 'Huancayo',
			'city_slug' => 'huancayo',
			'image' => 'image/cities/huancayo.jpg',
		]);

		$this->call(PermissionsTableSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(PropertiesTableSeeder::class);
		$this->call(PropertyImagesTableSeeder::class);
	}
}
