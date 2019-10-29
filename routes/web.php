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

	//Users

});

Route::middleware(['auth', 'verified'])->group(function () {
	//user
	Route::get('user', 'UserController@index')->name('user.index');
	Route::get('/table/user', 'UserController@dataTable')->name('table.user');

	Route::get('/home', 'AdminController@index')->name('dashboard');
	//propiedades
	Route::resource('property', 'PropertyController');
	// Datatables
	Route::get('/table/property', 'PropertyController@dataTable')->name('table.property');

	//categorias

	Route::resource('category', 'CategoryController');
	Route::get('/table/category', 'CategoryController@dataTable')->name('table.category');

	Route::get('/json-provincias', 'LocationController@provincias')->name('table.provincias');
	Route::get('/json-distritos', 'LocationController@distritos')->name('table.distritos');
	Route::get('/json-zonas', 'LocationController@zonas')->name('table.zonas');

	Route::resource('role', 'RoleController');
	Route::get('/table/role', 'RoleController@dataTable')->name('table.role');
	Route::resource('permission', 'PermissionController');
});

//Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
