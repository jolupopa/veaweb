<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Http\Request;

class CategoryController extends Controller {

	public function index() {
		$categories = Category::get();
		//$properties = json_decode(json_encode($properties));
		return view('admin.category.index');
	}

	public function create() {
		$model = new Category();
		return view('admin.category.form', compact('model'));
	}

	public function store(Request $request) {

		$this->validate($request, [
			'category_name' => 'required',
			'category_slug' => 'required|string',
			'category_description' => 'required|string|max:255',
		]);

		$model = Category::create($request->all());
		return $model;
	}

	public function show($id) {
		$model = Category::findOrFail($id);
		return view('admin.category.form', compact('model'));
	}

	public function edit($id) {
		$model = Category::findOrFail($id);
		return view('admin.category.form', compact('model'));
	}

	public function update(Request $request, $id) {
		$this->validate($request, [
			'category_name' => 'required',
			'category_slug' => 'required|string',
			'category_description' => 'required|string|max:255',
		]);

		$model = Category::findOrFail($id);

		$model->update($request->all());
	}

	public function destroy($id) {
		$model = Category::findOrFail($id);
		$model->delete();
		//Category::destroy($id);
	}

	public function dataTable() {
		$model = Category::query();
		return DataTables::of($model)
			->addColumn('action', function ($model) {
				return view('admin.partials.actions', [
					'model' => $model,
					'url_show' => route('categories.show', $model->id),
					'url_edit' => route('categories.edit', $model->id),
					'url_destroy' => route('categories.destroy', $model->id),
				]);
			})
			->addIndexColumn()
			->rawColumns(['action'])
			->make(true);
	}
}
