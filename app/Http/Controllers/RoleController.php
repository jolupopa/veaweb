<?php

namespace App\Http\Controllers;

use App\Role;
use DataTables;
use Illuminate\Http\Request;

class RoleController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('layouts.adminLayout.pages.role.index', [
			'roles' => Role::all()]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$model = new Role();
		return view('layouts.adminLayout.pages.role.form', compact('model'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$this->validate($request, [
			'name' => 'required',
			'slug' => 'required|string',
			'description' => 'required|string|max:255',
		]);

		$model = Role::create($request->all());
		return $model;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$model = Role::findOrFail($id);
		return view('layouts.adminLayout.pages.role.form', compact('model'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$model = Role::findOrFail($id);
		return view('layouts.adminLayout.pages.role.form', compact('model'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$this->validate($request, [
			'name' => 'required',
			'slug' => 'required|string',
			'description' => 'required|string|max:255',
		]);

		$model = Role::findOrFail($id);

		$model->update($request->all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Role $role) {
		$role->delete();
	}

	public function dataTable() {
		$model = Role::query();
		return DataTables::of($model)
			->addColumn('action', function ($model) {
				return view('layouts.adminLayout.pages.partials.actions', [
					'model' => $model,
					'url_show' => route('role.show', $model->id),
					'url_edit' => route('role.edit', $model->id),
					'url_destroy' => route('role.destroy', $model->id),
				]);
			})
			->addIndexColumn()
			->rawColumns(['action'])
			->make(true);
	}
}
