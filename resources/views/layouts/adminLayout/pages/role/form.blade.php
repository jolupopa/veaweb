{!! Form::model($model, [
	'route' => $model->exists ? ['role.update', $model->id] : 'role.store',
	'method' => $model->exists ? 'PUT' : 'POST'
])
!!}


<div class="form-group">
	<label for="" class="control-label">Nombre del rol</label>
	{!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
</div>

<div class="form-group">
	<label for="" class="control-label">Slug</label>
	{!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) !!}
</div>

<div class="form-group">
	<label for="" class="control-label">Descripcion</label>
	{!! Form::text('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
</div>



{!! Form::close() !!}