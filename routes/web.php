<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', 'SiteController@index');

// listar las propiedades de la ciudad seleccionada
Route::get('/ciudades/{city}', 'CityController@show');
// mostrar detalle propiedad seleccionada
// Route::get('/propiedades/{id}', 'PropertyController@show')->where(['id' => '[0-9]+']);

// Socialite Register Routes
Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\SocialController@getSocialRedirect']);
Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'Auth\SocialController@getSocialHandle']);

Auth::routes(['verify' => true]);

Route::middleware(['auth'])->group(function () {
	// Roles
	Route::get('/roles/create', 'RoleController@create')->name('roles.create')->middleware('permission:roles.create');
	Route::post('/roles/store', 'RoleController@store')->name('roles.store')->middleware('permission:roles.create');

	Route::get('/roles', 'RoleController@index')->name('roles.index')->middleware('permission:roles.index');

	Route::get('/roles/{role}', 'RoleController@show')->name('roles.show')->middleware('permission:roles.show');

	Route::get('/roles/{role}/edit', 'RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');
	Route::put('/roles/{role}', 'RoleController@update')->name('roles.update')->middleware('permission:roles.edit');

	Route::delete('/roles/{role}', 'RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.destroy');

	//Users
	Route::get('/users', 'UserController@index')->name('users.index')->middleware('permission:users.index');

	Route::get('/users/{role}', 'UserController@show')->name('users.show')->middleware('permission:users.show');

	Route::get('/users/{role}/edit', 'UserController@edit')->name('users.edit')->middleware('permission:users.edit');
	Route::put('/users/{role}', 'UserController@update')->name('users.update')->middleware('permission:users.edit');

	Route::delete('/users/{role}', 'UserController@destroy')->name('users.destroy')->middleware('permission:users.destroy');

});

Route::middleware(['auth', 'verified'])->namespace('Admin')->group(function () {

	Route::get('/home', 'AdminController@index')->name('dashboard');
	//propiedades
	Route::get('/properties', 'PropertyController@index')->name('properties.index')->middleware('permission:properties.index');

	Route::get('/properties/create', 'PropertyController@create')->name('properties.create')->middleware('permission:properties.create');
	Route::post('/properties/store', 'PropertyController@store')->name('properties.store')->middleware('permission:properties.create');
	Route::get('/properties/{property}', 'PropertyController@show')->name('properties.show')->middleware('permission:properties.show');

	Route::get('/properties/{property}/edit', 'PropertyController@edit')->name('properties.edit')->middleware('permission:properties.edit');
	Route::put('/properties/{property}', 'PropertyController@update')->name('properties.update')->middleware('permission:properties.edit');

	Route::delete('/properties/{property}', 'PropertyController@destroy')->name('properties.destroy')->middleware('permission:properties.destroy');

	// Datatables
	Route::get('/table/property', 'PropertyController@dataTable')->name('table.property');

	//categorias
	Route::get('/utilities/categories', 'CategoryController@index')->name('categories.index')->middleware('permission:categories.index');

	Route::get('/categories/create', 'CategoryController@create')->name('categories.create')->middleware('permission:categories.create');
	Route::post('/categories/store', 'CategoryController@store')->name('categories.store')->middleware('permission:categories.create');

	Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show')->middleware('permission:categories.show');

	Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('categories.edit')->middleware('permission:categories.edit');
	Route::put('/categories/{category}/edit', 'CategoryController@update')->name('categories.update')->middleware('permission:categories.edit');

	Route::delete('/categories/{category}', 'CategoryController@destroy')->name('categories.destroy')->middleware('permission:categories.destroy');

	Route::get('/table/category', 'CategoryController@dataTable')->name('table.category');

});

//Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
