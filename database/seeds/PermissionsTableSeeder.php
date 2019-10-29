<?php
use App\Permission;
use App\Role;
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
			'name' => 'Listar usuarios',
			'key' => 'index user',
			'slug' => 'index-user',
			'description' => 'Lista y navega todos los usuarios del sistema',
		]);

		Permission::create([
			'name' => 'Crear usuario',
			'key' => 'create user',
			'slug' => 'create-user',
			'description' => 'Ver en detalle cada unode  los usuarios del sistema',
		]);

		Permission::create([
			'name' => 'Detallar usuario',
			'key' => 'show user',
			'slug' => 'show-user',
			'description' => 'Ver en detalle cada unode  los usuarios del sistema',
		]);

		Permission::create([
			'name' => 'Editar usuario',
			'key' => 'update user',
			'slug' => 'update-user',
			'description' => 'Editar cualquier dato del usuario seleccionado',
		]);

		Permission::create([
			'name' => 'Elimina usuario',
			'key' => 'delete-user',
			'slug' => 'delete-user',
			'description' => 'Eliminar un usuario del sistema',
		]);

		// Roles
		Permission::create([
			'name' => 'Listar roles',
			'key' => 'index role',
			'slug' => 'index-role',
			'description' => 'Lista y navega todos los roles del sistema',
		]);

		Permission::create([
			'name' => 'Crear rol',
			'key' => 'create role',
			'slug' => 'create-role',
			'description' => 'Crear un rol del sistema',
		]);

		Permission::create([
			'name' => 'Detallar rol',
			'key' => 'show role',
			'slug' => 'show-role',
			'description' => 'Ver el detalle del rol seleccionado',
		]);

		Permission::create([
			'name' => 'Editar rol',
			'key' => 'update role',
			'slug' => 'update-role',
			'description' => 'Editar cualquier dato del rol seleccionado',
		]);

		Permission::create([
			'name' => 'Eliminar role',
			'key' => 'delete-role',
			'slug' => 'delete-role',
			'description' => 'Eliminar un usuario del sistema',
		]);

		Role::create([
			'name' => 'Administrador',
			'slug' => 'administrador',
			'description' => 'Usuario del sistema con todos los accesos sin restricciones',
		]);

		Role::create([
			'name' => 'Cliente',
			'slug' => 'cliente',
			'description' => 'Usuario que se registra al sistema para usar los servicios des sistema',
		]);

	}
}
