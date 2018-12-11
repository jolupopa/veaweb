@extends('layouts.adminLayout.admin_app')

@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h3 class="m-0 text-dark">Listado de :</h3>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Categorias</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h5 class="panel-title">Categorias
						<a href="{{ route('categories.create') }}" class="btn btn-success pull-right modal-show" style="margin-top: -8px;" title="Nueva Categoria"><i class="icon-plus"></i> + Crear</a>
					</h5>
				</div>
				<div class="panel-body">
					<table id="datatable2" class="table table-hover display dt-responsive" style="width:100%">
						<thead>
							<tr>
								<th >Id</th>
								<th >Nombre</th>
								<th >Slug</th>
								<th >Descripcion</th>
								<th></th>
							</tr>
						</thead>
						<tbody>

						</tbody>
						<tfoot>
							<tr>
								<th>Id</th>
								<th >Nombre</th>
								<th >Slug</th>
								<th >Descripcion</th>
								<th></th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
</div>

@include('admin.partials.modal')
@endsection

@push('styles')
<!-- Datatables -->

<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap4-1.10.19.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/plugins/datatable/css/responsive.bootstrap4-2.2.3.min.css') }}" rel="stylesheet">

<style type="text/css">
form div span .help-block {
	display: block;
	margin-top: 5px;
	margin-bottom: 10px;
	color: #737373;
}

.has-error {
	color: #a94442;
}
</style>


@endpush



@push('scripts')
<script src="{{ asset('assets/plugins/datatable/js/jquery.datatables-1.10.19.min.js') }}"></script>

<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap4-1.10.19.min.css') }}"></script>

<script src="{{ asset('assets/plugins/datatable/js/dataTables.responsive-2.2.3.min.js') }}"></script>

<script src="{{ asset('assets/plugins/datatable/js/responsive.bootstrap4-2.2.3.min.js') }}"></script>

<!-- Sweetalert2 -->
<script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

<script>

	$('#datatable2').DataTable({


		responsive: true,
		processing: true,
		serverSide: true,
		language: {
			url: '/assets/plugins/dataTable/spanish.json'
		},
		ajax: "{{ route('table.category') }}",
		columns: [
		{data: 'id', name: 'id'},
		{data: 'category_name', name: 'category_name'},
		{data: 'category_slug', name: 'category_slug'},
		{data: 'category_description', name: 'category_description'},
		{data: 'action', name: 'action'}
		]
	});

</script>

<script>
	(function(){

	// mostrar formulario para crear o editar dataTables
	$('body').on('click', '.modal-show', function (event) {
		event.preventDefault();

		var me = $(this),
		url = me.attr('href'),
		title = me.attr('title');

		$('#modal-title').text(title);
		$('#modal-btn-save').removeClass('hide')
		.text(me.hasClass('edit') ? 'Actualizar' : 'Crear');

		$.ajax({
			url: url,
			dataType: 'html'
		})
		.done(function (view_form) {
			$('#modal-body').html(view_form);
		});

		$('#modal').modal('show');
	});




	//crear
	$('#modal-btn-save').click(function (event) {
		event.preventDefault();

		var form = $('#modal-body form'),
		url = form.attr('action'),
		method = $('input[name=_method]').val() == undefined ? 'POST' : 'PUT';

		form.find('.help-block').remove();
		form.find('.form-group').removeClass('has-error');

		$.ajax({
			url : url,
			method: method,
			data : form.serialize(),
			success: function (response) {
				form.trigger('reset');
				$('#modal').modal('hide');
				$('#datatable2').DataTable().ajax.reload();

				swal({
					type : 'success',
					title : 'Success!',
					text : 'Data has been saved!'
				});
			},
			error : function (xhr) {
				var res = xhr.responseJSON;
				if ($.isEmptyObject(res) == false) {
					$.each(res.errors, function (key, value) {
						$('#' + key)
						.closest('.form-group')
						.addClass('has-error')
						.append('<span class="help-block"><strong>' + value + '</strong></span>');
					});
				}
			}
		})
	});



})();
</script>
@endpush