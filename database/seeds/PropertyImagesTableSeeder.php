<?php

use Illuminate\Database\Seeder;

class PropertyImagesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\PropertyImage::class, 100)->create();
	}
}
