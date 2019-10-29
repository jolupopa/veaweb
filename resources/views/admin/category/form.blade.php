{!! Form::model($model, [
	'route' => $model->exists ? ['category.update', $model->id] : 'category.store',
	'method' => $model->exists ? 'PUT' : 'POST'
])
!!}

<div class="form-group">
	<label for="" class="control-label">Nombre de categoria</label>
	{!! Form::text('category_name', null, ['class' => 'form-control', 'id' => 'category_name']) !!}
</div>

<div class="form-group">
	<label for="" class="control-label">Slug</label>
	{!! Form::text('category_slug', null, ['class' => 'form-control', 'id' => 'category_slug']) !!}
</div>

<div class="form-group">
	<label for="" class="control-label">Descripcion</label>
	{!! Form::text('category_description', null, ['class' => 'form-control', 'id' => 'category_description']) !!}
</div>



{!! Form::close() !!}
