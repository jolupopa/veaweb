@extends('layouts.adminLayout.admin')

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
						<li class="breadcrumb-item active">Usuarios</li>
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
					<h5 class="panel-title">Usuarios
						<a href="#" class="btn btn-success pull-right modal-show" style="margin-top: -8px;" title="Nueva Categoria"><i class="icon-plus"></i> + Crear</a>
					</h5>
				</div>
				<div class="panel-body">
					<table id="users-table" class="table table-hover display dt-responsive" style="width:100%">
						<thead>
							<tr>
								<th>Id</th>
								<th>Name</th>
								<th>Email</th>
								<th>Created At</th>
								<th>Updated At</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
						<tfoot>
							<tr>
								<th>Id</th>
								<th>Name</th>
								<th>Email</th>
								<th>Created At</th>
								<th>Updated At</th>
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
	$(function() {
		$('#users-table').DataTable({
			processing: true,
			serverSide: true,
			ajax: '{!! route('table.user') !!}',
			columns: [
			{ data: 'id', name: 'id' },
			{ data: 'name', name: 'name' },
			{ data: 'email', name: 'email' },
			{ data: 'created_at', name: 'created_at' },
			{ data: 'updated_at', name: 'updated_at' }
			]
		});
	});
</script>
@endpush