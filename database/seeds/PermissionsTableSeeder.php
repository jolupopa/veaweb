<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		// Usuarios -- se cra al registrarse
		Permission::create([
			'name' => 'Navegar usuarios',
			'slug' => 'users.index',
			'description' => 'Lista y navega todos los usuarios del sistema',
		]);

		Permission::create([
			'name' => 'Ver detalle de usuario',
			'slug' => 'users.show',
			'description' => 'Ver en detalle cada unode  los usuarios del sistema',
		]);

		Permission::create([
			'name' => 'Editar usuario',
			'slug' => 'users.edit',
			'description' => 'Editar cualquier dato de usuarios del sistema',
		]);

		Permission::create([
			'name' => 'Eliminar usuario',
			'slug' => 'users.destroy',
			'description' => 'Eliminar un usuario del sistema',
		]);

		// Roles
		Permission::create([
			'name' => 'Navegar roles',
			'slug' => 'roles.index',
			'description' => 'Lista y navega todos los roles del sistema',
		]);

		Permission::create([
			'name' => 'Ver detalle de rol',
			'slug' => 'roles.show',
			'description' => 'Ver en detalle cada unode  los roles del sistema',
		]);

		Permission::create([
			'name' => 'Crear rol',
			'slug' => 'roles.create',
			'description' => 'Crear un rol en el sistema',
		]);

		Permission::create([
			'name' => 'Editar rol',
			'slug' => 'roles.edit',
			'description' => 'Editar cualquier dato de roles del sistema',
		]);

		Permission::create([
			'name' => 'Eliminar role',
			'slug' => 'roles.destroy',
			'description' => 'Eliminar un usuario del sistema',
		]);

		// Property
		Permission::create([
			'name' => 'Navegar propiedades',
			'slug' => 'properties.index',
			'description' => 'Lista y navega todas las propiedades del sistema',
		]);

		Permission::create([
			'name' => 'Ver detalle de una propiedad',
			'slug' => 'properties.show',
			'description' => 'Ver el detalle de una propiedad del sistema',
		]);

		Permission::create([
			'name' => 'Crear una propiedad',
			'slug' => 'properties.create',
			'description' => 'Crear una propiedad en el sistema',
		]);

		Permission::create([
			'name' => 'Editar una propiedad',
			'slug' => 'properties.edit',
			'description' => 'Editar cualquier dato de una propiedad del sistema',
		]);

		Permission::create([
			'name' => 'Eliminar una propiedad',
			'slug' => 'properties.destroy',
			'description' => 'Eliminar una propiedad del sistema',
		]);

		// Category
		Permission::create([
			'name' => 'Navegar categorias',
			'slug' => 'categories.index',
			'description' => 'Lista y navega todas las categorias del sistema',
		]);

		Permission::create([
			'name' => 'Ver detalle de una categoria',
			'slug' => 'categories.show',
			'description' => 'Ver el detalle de una categoria del sistema',
		]);

		Permission::create([
			'name' => 'Crear una categoria',
			'slug' => 'categories.create',
			'description' => 'Crear una categoria en el sistema',
		]);

		Permission::create([
			'name' => 'Editar una categoria',
			'slug' => 'categories.edit',
			'description' => 'Editar cualquier dato de una categoria del sistema',
		]);

		Permission::create([
			'name' => 'Eliminar una categoria',
			'slug' => 'categories.destroy',
			'description' => 'Eliminar una categoria del sistema',
		]);
	}
}
