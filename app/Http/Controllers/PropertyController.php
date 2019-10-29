<?php

namespace App\Http\Controllers;

use App\Category;
use App\Departamento;
use App\Http\Controllers\Controller;
use App\Property;
use DataTables;
use Illuminate\Http\Request;

class PropertyController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$properties = Property::get();
		//$properties = json_decode(json_encode($properties));

		return view('admin.property.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$departamentos = Departamento::all();
		$categorias = Category::all();

		return view('admin.property.create', compact('departamentos', 'categorias'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		return $request->all();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}

	public function dataTable() {
		$model = Property::query();
		return DataTables::of($model)
			->addColumn('action', function ($model) {
				return view('admin.partials.actions', [
					'model' => $model,
					'url_show' => route('property.show', $model->id),
					'url_edit' => route('property.edit', $model->id),
					'url_destroy' => route('property.destroy', $model->id),
				]);
			})
			->addIndexColumn()
			->rawColumns(['action'])
			->make(true);
	}
}
