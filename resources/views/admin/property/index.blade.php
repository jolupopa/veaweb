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
						<li class="breadcrumb-item active">Propiedades</li>
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
					<h5 class="panel-title">Propiedades
						<a href="{{ route('properties.create') }}" class="btn btn-success pull-right modal-show" style="margin-top: -8px;" title="Create User"><i class="icon-plus"></i> + Crear</a>
					</h5>
				</div>
				<div class="panel-body">
					<table id="datatable" class="table table-hover display dt-responsive" style="width:100%">
						<thead>
							<tr>
								<th >Id</th>
								<th >Titulo</th>
								<th >Tipo</th>
								<th >Ciudad</th>
								<th >Zona</th>
								<th >Propietario</th>
								<th >Operación</th>
								<th >Activa</th>
								<th></th>
							</tr>
						</thead>
						<tbody>

						</tbody>
						<tfoot>
							<tr>
								<th>Id</th>
								<th>Titulo</th>
								<th>Tipo</th>
								<th>Ciudad</th>
								<th>Zona</th>
								<th>Propietario</th>
								<th>Operación</th>
								<th>Activa</th>
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

@endsection

@push('styles')
<!-- Datatables -->

<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap4-1.10.19.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/plugins/datatable/css/responsive.bootstrap4-2.2.3.min.css') }}" rel="stylesheet">


@endpush



@push('scripts')
<script src="{{ asset('assets/plugins/datatable/js/jquery.datatables-1.10.19.min.js') }}"></script>

<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap4-1.10.19.min.css') }}"></script>

<script src="{{ asset('assets/plugins/datatable/js/dataTables.responsive-2.2.3.min.js') }}"></script>

<script src="{{ asset('assets/plugins/datatable/js/responsive.bootstrap4-2.2.3.min.js') }}"></script>

<script>

	$('#datatable').DataTable({


		responsive: true,
		processing: true,
		serverSide: true,
		language: {
			url: '/assets/plugins/dataTable/spanish.json'
		},
		ajax: "{{ route('table.property') }}",
		columns: [
		{data: 'id', name: 'id'},
		{data: 'title', name: 'title'},
		{data: 'category_id', name: 'category_id'},
		{data: 'city_id', name: 'city_id'},
		{data: 'zone', name: 'zone'},
		{data: 'owner', name: 'owner'},
		{data: 'operacion', name: 'operacion'},
		{data: 'status', name: 'status'},
		{data: 'action', name: 'action'}
		]
	});
</script>
@endpush