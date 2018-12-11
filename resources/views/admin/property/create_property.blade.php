@extends('layouts.adminLayout.admin_app')



@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Agregar una propiedad</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Propiedades/crear</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<form method="POST" action="{{ route('properties.store')}}">

			{{ csrf_field() }}
			<div class="container-fluid">
				<div class="row">


					<div class="col-md-9">
						<div class="card">
							<div class="card-header p-2">
								<span> Datos Generales</span>
							</div><!-- /.card-header -->
							<div class="card-body">

								<div class="row">
									<!-- text input -->
									<div class="col-12 col-sm-4 form-group">
										<label>Codigo</label>
										<input type="text" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" name="codigo" placeholder="CODIGO" value="{{ old('codigo') }}" required >
									</div>
									<!-- select -->
									<div class="col-12 col-sm-4 form-group">
										<label>Tipo de Inmueble</label>
										<select class="form-control" name="type_property" >
											<option value="">Seleccione una Categoria</option>
											<option value="10">Casa 10</option>
											<option value="11">option 11</option>
											<option value="12">option 12</option>
											<option value="13">option 13</option>
											<option value="14">option 14</option>
										</select>
									</div>
									<div class="col-12 col-sm-4 form-group">
										<label>Tipo de transaccion</label>
										<select class="form-control" name="type_operation">
											<option value="">Tipo de transaccion</option>
											<option value="1">Venta</option>
											<option  value="2">Alquiler</option>
											<option  value="3">Hospedaje</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label>Titulo</label>
									<input type="text" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="titulo" placeholder="Titulo" value="{{ old('titulo') }}" required>
								</div>

								<!-- textarea -->
								<div class="form-group">
									<label>Descripcion</label>
									<textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" rows="3" name="description" placeholder="Descripcion">{{ old('description') }}</textarea>
								</div>

								<div class="row">
									<!-- text input -->
									<div class="col-12 col-sm-4 form-group">
										<label>Departamento</label>
										<select name="departamento" class="form-control">
											<option value="">Departamento</option>
											<option>La Libertad</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										</select>

									</div>
									<!-- select -->
									<div class="col-12 col-sm-4 form-group">
										<label>Provincia</label>
										<select name="provincia" class="form-control">
											<option value="">Provincias</option>
											<option>Trujillo</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										</select>
									</div>
									<div class="col-12 col-sm-4 form-group">
										<label>Distrito</label>
										<select name="distrito" class="form-control">
											<option value="">Distritos</option>
											<option>Victor Larco Herrera</option>
											<option>Alquiler</option>
											<option>Compra</option>
										</select>
									</div>
								</div>

								<div class="row">
									<!-- text input -->
									<div class="col-12 col-sm-4 form-group">
										<label>Ciudad</label>
										<select name="city" class="form-control">
											<option value="">Ciudades</option>
											<option>Trujillo</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										</select>

									</div>
									<!-- select -->
									<div class="col-12 col-sm-4 form-group">
										<label>Zona</label>
										<select name="zone" class="form-control">
											<option value="">Zonas</option>
											<option>Urb California</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										</select>
									</div>
									<div class="col-12 col-sm-4 form-group">
										<label>Codigo Postal</label>
										<input type="text" name="cp" class="form-control{{ $errors->has('cp') ? ' is-invalid' : '' }}" placeholder="Codigo Postal" value="{{ old('cp') }}" >
									</div>
								</div>

								<div class="form-group">
									<label>Dirección</label>
									<input type="text" name="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="direccion" value="{{ old('address') }}">
								</div>
								<div class="form-group">
									<label>Referencia</label>
									<input type="text" name="reference" class="form-control{{ $errors->has('reference') ? ' is-invalid' : '' }}" placeholder="referencia" value="{{ old('reference') }}">
								</div>
								<div class="row">
									<div class="col-12 col-sm-6 form-group">
										<label>Latitud - mapa</label>
										<input type="text" name="map_latitud" class="form-control{{ $errors->has('map_latitud') ? ' is-invalid' : '' }}" placeholder="Latitud" value="{{ old('map_latitud') }}">
									</div>
									<div class="col-12 col-sm-6 form-group">
										<label>Longitud - mapa</label>
										<input type="text" name="map_longitud" class="form-control{{ $errors->has('map_longitud') ? ' is-invalid' : '' }}" placeholder="Longitud" value="{{ old('map_longitud') }}">
									</div>
								</div>

								<div class="row">
									<!-- text input -->
									<div class="col-12 col-sm-4 form-group">
										<label>Precio de Venta</label>
										<input type="text" name="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="Precio de Venta" value="{{ old('price') }}">
									</div>
									<!-- select -->
									<div class="col-12 col-sm-4 form-group">
										<label>Moneda</label>
										<select class="form-control" name="moneda">
											<option selected="selected" value="1">USD</option>
											<option value="10">MXN</option>
											<option value="4">ARS</option>
											<option value="6">BRL</option>
											<option value="16">CLP</option>
											<option value="13">COP</option>
											<option value="14">CRC</option>
											<option value="28">DOP</option>
											<option value="27">EGP</option>
											<option value="3">EUR</option>
											<option value="29">GTQ</option>
											<option value="15">PEN</option>
											<option value="26">UF</option>
											<option value="23">UYU</option>
										</select>
									</div>

								</div>
								<div class="row">
									<!-- checkbox -->
									<div class=" col-12 col-sm-4 form-group">
										<label>
											<input type="radio" class="flat-red" name="precio_por" value="total" checked >
											Valor Total
										</label>
									</div>
									<!-- checkbox -->
									<div class="col-12 col-sm-4 form-group">
										<label>
											<input type="radio" class="flat-red" name="precio_por" value="m2"  >
											Valor por M2
										</label>
									</div>
									<!-- checkbox -->
									<div class="col-12 col-sm-4 form-group">
										<label>
											<input type="radio" class="flat-red" name="precio_por" value="ha" >
											Valor por Ha
										</label>
									</div>
								</div>
								<div class="row">
									<!-- text input -->
									<div class="col-12 col-sm-4 form-group">
										<label>Comisión</label>
										<input type="text" class="form-control" placeholder="Maximo 10%">
									</div>
									<!-- select -->
									<div class="col-12 col-sm-4 form-group">
										<label>Tipo de comisión</label>
										<select class="form-control" name="property" >
											<option selected="selected" value="1">% de valor total</option>
											<option value="10">Monto fijo</option>
										</select>
									</div>

								</div>

								<div class="row">
									<!-- text input -->
									<div class="col-12 col-sm-4 form-group">
										<label>Precio de Alquiler</label>
										<input type="text" class="form-control" placeholder="Precio de Alquiler">
									</div>
									<!-- select -->
									<div class="col-12 col-sm-4 form-group">
										<label>Moneda</label>
										<select class="form-control" name="property[sale_currency_id]" id="property_sale_currency_id"><option selected="selected" value="1">USD</option>
											<option value="10">MXN</option>
											<option value="4">ARS</option>
											<option value="6">BRL</option>
											<option value="16">CLP</option>
											<option value="13">COP</option>
											<option value="14">CRC</option>
											<option value="28">DOP</option>
											<option value="27">EGP</option>
											<option value="3">EUR</option>
											<option value="29">GTQ</option>
											<option value="15">PEN</option>
											<option value="26">UF</option>
											<option value="23">UYU</option>
										</select>
									</div>

								</div>
								<div class="row">
									<!-- checkbox -->
									<div class=" col-12 col-sm-4 form-group">
										<label>
											<input type="radio" class="flat-red" name="radio" cheked>
											Valor Total
										</label>
									</div>
									<!-- checkbox -->
									<div class="col-12 col-sm-4 form-group">
										<label>
											<input type="radio" class="flat-red" name="radio" >
											Valor por M2
										</label>
									</div>
									<!-- checkbox -->
									<div class="col-12 col-sm-4 form-group">
										<label>
											<input type="radio" class="flat-red" name="radio">
											Valor por Ha
										</label>
									</div>
								</div>
								<div class="row">
									<!-- text input -->
									<div class="col-12 col-sm-4 form-group">
										<label>Comisión</label>
										<input type="text" class="form-control" placeholder="Maximo 10%">
									</div>
									<!-- select -->
									<div class="col-12 col-sm-4 form-group">
										<label>Tipo de comisión</label>
										<select class="form-control" name="property" >
											<option selected="selected" value="1">% de valor contractual</option>
											<option selected="selected" value="2">mensual</option>
											<option value="10">Monto fijo</option>
										</select>
									</div>

								</div>

								<div class="row">
									<!-- text input -->
									<div class="col-12 col-sm-4 form-group">
										<label>Precio de Hospedaje</label>
										<input type="text" class="form-control" placeholder="Precio de Alquiler temporal">
									</div>
									<!-- select -->
									<div class="col-12 col-sm-4 form-group">
										<label>Moneda</label>
										<select class="form-control" name="property[sale_currency_id]" id="property_sale_currency_id"><option selected="selected" value="1">USD</option>
											<option value="10">MXN</option>
											<option value="4">ARS</option>
											<option value="6">BRL</option>
											<option value="16">CLP</option>
											<option value="13">COP</option>
											<option value="14">CRC</option>
											<option value="28">DOP</option>
											<option value="27">EGP</option>
											<option value="3">EUR</option>
											<option value="29">GTQ</option>
											<option value="15">PEN</option>
											<option value="26">UF</option>
											<option value="23">UYU</option>
										</select>
									</div>

								</div>
								<div class="row">
									<!-- checkbox -->
									<div class=" col-12 col-sm-4 form-group">
										<label>
											<input type="radio" class="flat-red" name="radio" cheked>
											Valor diario
										</label>
									</div>
									<!-- checkbox -->
									<div class="col-12 col-sm-4 form-group">
										<label>
											<input type="radio" class="flat-red" name="radio" >
											Valor semanal
										</label>
									</div>
									<!-- checkbox -->
									<div class="col-12 col-sm-4 form-group">
										<label>
											<input type="radio" class="flat-red" name="radio">
											Valor mensual
										</label>
									</div>
								</div>
								<div class="row">
									<!-- text input -->
									<div class="col-12 col-sm-4 form-group">
										<label>Tiempo de Estadia</label>
										<input type="text" class="form-control" placeholder="cantidad">
									</div>
									<!-- select -->
									<div class="col-12 col-sm-4 form-group">
										<label># de Personas</label>
										<select class="form-control" name="property" >
											<option selected="selected" value="1">1</option>
											<option selected="selected" value="2">2</option>
											...
											<option value="10">30</option>
										</select>
									</div>

								</div>

								<div class="row">
									<div class="pt-3">
										<!-- Publish Prices -->
										<div class="form-group">
											<label class="col-12 control-label" for="property_publish_prices">Mostrar precios en el anuncio</label>
											<div class="col-sm-6">

												<div class="flex-btn-group-container">
													<div class="flex-btn-group data-filter-toggle-btn-group data-filter-mobile">
														<a data-value="true" class="xl-item" href="#">Sí</a>
														<a data-value="false" class="xl-item" href="#">
															<span data-toggle="tooltip" data-placement="bottom" data-title="La propiedad podría no aparecer publicada en algunos portales.">No</span>
														</a>          </div>
														<input type="hidden" value="true" name="property[publish_prices]" id="property_publish_prices" />
													</div>

												</div>
											</div>
											<!-- Publish Adress -->
											<div class="form-group">
												<label class="col-12 control-label" for="property_publish_prices">Mostrar la direccion</label>
												<div class="col-sm-6">

													<div class="flex-btn-group-container">
														<div class="flex-btn-group data-filter-toggle-btn-group data-filter-mobile">
															<a data-value="true" class="xl-item" href="#">Sí</a>
															<a data-value="false" class="xl-item" href="#">
																<span data-toggle="tooltip" data-placement="bottom" data-title="La propiedad podría no aparecer publicada en algunos portales.">No</span>
															</a>          </div>
															<input type="hidden" value="true" name="property[publish_prices]" id="property_publish_prices" />
														</div>

													</div>
												</div>
											</div>
										</div>

									</div><!-- /.card-body -->
								</div>
								<!-- /.nav-tabs-custom -->


								<div class="card">
									<div class="card-header p-2">
										<span> Caracteristicas fisicos</span>
									</div><!-- /.card-header -->
									<div class="card-body">

										<div class="row">
											<!-- select -->
											<div class="col-12 col-sm-3 form-group">
												<label>Dormitorios</label>
												<select class="form-control" name="property" >
													<option selected="selected" value="1">1</option>
													<option selected="selected" value="2">2</option>
													...
													<option value="10">30</option>
												</select>
											</div>
											<!-- select -->
											<div class="col-12 col-sm-3 form-group">
												<label>Baños</label>
												<select class="form-control" name="property" >
													<option selected="selected" value="1">1</option>
													<option selected="selected" value="2">2</option>
													...
													<option value="10">30</option>
												</select>
											</div>
											<!-- select -->
											<div class="col-12 col-sm-3 form-group">
												<label>Medios Baños</label>
												<select class="form-control" name="property" >
													<option selected="selected" value="1">1</option>
													<option selected="selected" value="2">2</option>
													...
													<option value="10">30</option>
												</select>
											</div>
											<!-- select -->
											<div class="col-12 col-sm-3 form-group">
												<label>Cocheras</label>
												<select class="form-control" name="property" >
													<option selected="selected" value="1">1</option>
													<option selected="selected" value="2">2</option>
													...
													<option value="10">30</option>
												</select>
											</div>

										</div>
										<div class="row">

											<div class="col-12 col-sm-3 form-group">
												<label>Area Total:</label>
												<div class="input-group mb-3">
													<input type="text" class="form-control">
													<div class="input-group-append">
														<span class="input-group-text">m2</span>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-3 form-group">
												<label>Area Construida:</label>
												<div class="input-group mb-3">
													<input type="text" class="form-control">
													<div class="input-group-append">
														<span class="input-group-text">m2</span>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-3 form-group">
												<label>Frontera</label>
												<div class="input-group mb-3">
													<input type="text" class="form-control">
													<div class="input-group-append">
														<span class="input-group-text">m</span>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-3 form-group">
												<label>Profundidad</label>
												<div class="input-group mb-3">
													<input type="text" class="form-control">
													<div class="input-group-append">
														<span class="input-group-text">m</span>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<!-- text input -->
											<div class="col-12 col-sm-4 form-group">
												<label>Terrenos Grandes</label>
												<input type="text" class="form-control" placeholder="medida del terreno">
											</div>
											<!-- select -->
											<div class="col-12 col-sm-4 form-group">
												<label>Unidad de medida</label>
												<select class="form-control" name="property" >
													<option selected="selected" value="1">m2</option>
													<option selected="selected" value="2">ha</option>
												</select>
											</div>

										</div>
										<div class="row">
											<!-- checkbox -->
											<div class=" col-12 col-sm-3 form-group">
												<div class="input-group"><label>Antiguo</label>
													<div class="input-group-prepend">
														<span class="input-group-text"><input type="radio" name="radio"></span>
													</div>
													<input type="text" class="form-control"  placeholder="1981">
												</div>
												<!-- /input-group -->
											</div>
											<!-- checkbox -->
											<div class="col-12 col-sm-3 form-group">
												<label>
													<input type="radio" class="flat-red" name="radio" >
													Estreno
												</label>
											</div>
											<!-- checkbox -->
											<div class="col-12 col-sm-3 form-group">
												<label>
													<input type="radio" class="flat-red" name="radio">
													En Construccion
												</label>
											</div>
											<!-- checkbox -->
											<div class="col-12 col-sm-3 form-group">
												<label>
													<input type="radio" class="flat-red" name="radio">
													Proyecto
												</label>
											</div>
										</div>
										<div class="row">
											<!-- select -->
											<div class="col-12 col-sm-3 form-group">
												<label>Piso en el se encuentra</label>
												<select class="form-control" name="property" >
													<option selected="selected" value="1">Sotano</option>
													<option selected="selected" value="2">Planta baja</option>
													<option selected="selected" value="3">1</option>
													<option selected="selected" value="4">2</option>
													...
													<option value="10">30</option>
												</select>
											</div>
											<!-- select -->
											<div class="col-12 col-sm-3 form-group">
												<label># pisos en el edificio</label>
												<select class="form-control" name="property" >
													<option selected="selected" value="1">1</option>
													<option selected="selected" value="2">2</option>
													...
													<option value="10">30</option>
												</select>
											</div>

											<!-- text input -->
											<div class="col-12 col-sm-3 form-group">
												<label>Clave interna</label>
												<input type="text" class="form-control" placeholder="DEP123">
											</div>

											<!-- text input -->
											<div class="col-12 col-sm-3 form-group">
												<label>clave de llaves</label>
												<input type="text" class="form-control" placeholder="c123">
											</div>


										</div>

									</div><!-- /.card-body -->
								</div>
								<!-- /.nav-tabs-custom -->

								<div class="card">
									<div class="card-header p-2">
										<span> Detalles</span>
									</div><!-- /.card-header -->
									<div class="card-body">

										<div class="row">
											<!-- checkbox -->
											<div class=" col-12 col-sm-4 form-group">
												<label>
													<input type="checkbox" class="flat-red" cheked>
													Flat green skin checkbox
												</label>
											</div>
											<!-- checkbox -->
											<div class="col-12 col-sm-4 form-group">
												<label>
													<input type="checkbox" class="flat-red" cheked>
													Flat green skin checkbox
												</label>
											</div>
											<!-- checkbox -->
											<div class="col-12 col-sm-4 form-group">
												<label>
													<input type="checkbox" class="flat-red" cheked>
													Flat green skin checkbox
												</label>
											</div>
										</div>
										<div class="row">
											<!-- checkbox -->
											<div class=" col-12 col-sm-4 form-group">
												<label>
													<input type="checkbox" class="flat-red" cheked>
													Flat green skin checkbox
												</label>
											</div>
											<!-- checkbox -->
											<div class="col-12 col-sm-4 form-group">
												<label>
													<input type="checkbox" class="flat-red" cheked>
													Flat green skin checkbox
												</label>
											</div>
											<!-- checkbox -->
											<div class="col-12 col-sm-4 form-group">
												<label>
													<input type="checkbox" class="flat-red" cheked>
													Flat green skin checkbox
												</label>
											</div>
										</div>
										<div class="row">
											<!-- checkbox -->
											<div class=" col-12 col-sm-4 form-group">
												<label>
													<input type="checkbox" class="flat-red" cheked>
													Flat green skin checkbox
												</label>
											</div>
											<!-- checkbox -->
											<div class="col-12 col-sm-4 form-group">
												<label>
													<input type="checkbox" class="flat-red" cheked>
													Flat green skin checkbox
												</label>
											</div>
											<!-- checkbox -->
											<div class="col-12 col-sm-4 form-group">
												<label>
													<input type="checkbox" class="flat-red" cheked>
													Flat green skin checkbox
												</label>
											</div>
										</div>
										<div class="row">
											<!-- checkbox -->
											<div class=" col-12 col-sm-4 form-group">
												<label>
													<input type="checkbox" class="flat-red" cheked>
													Flat green skin checkbox
												</label>
											</div>
											<!-- checkbox -->
											<div class="col-12 col-sm-4 form-group">
												<label>
													<input type="checkbox" class="flat-red" cheked>
													Flat green skin checkbox
												</label>
											</div>
											<!-- checkbox -->
											<div class="col-12 col-sm-4 form-group">
												<label>
													<input type="checkbox" class="flat-red" cheked>
													Flat green skin checkbox
												</label>
											</div>
										</div>
									</div><!-- /.card-body -->
								</div>
								<!-- /.nav-tabs-custom -->
							</div>
							<!-- /.col -->
							<div class="col-md-3">

								<!-- Profile Image -->
								<div class="card card-primary card-outline">
									<div class="card-body box-profile">
										<div class="text-center">
											<img class="profile-user-img img-fluid img-circle"
											src="../../../admin/dist/img/user4-128x128.jpg"
											alt="User profile picture">
										</div>

										<h3 class="profile-username text-center">Nina Mcintire</h3>

										<p class="text-muted text-center">Agente</p>

										<ul class="list-group list-group-unbordered mb-3">
											<li class="list-group-item">
												<b>En venta</b> <a class="float-right">22</a>
											</li>
											<li class="list-group-item">
												<b>En Alquiler</b> <a class="float-right">53</a>
											</li>
											<li class="list-group-item">
												<b>Captacion</b> <a class="float-right">287</a>
											</li>
										</ul>

										<input type="submit" name="submit" class="btn btn-primary btn-block" value="Guardar" >
									</div>
									<!-- /.card-body -->
								</div>
								<!-- /.card -->


							</div>
							<!-- /.col -->

						</div>
						<!-- /.row -->
					</div><!-- /.container-fluid -->
				</form>
			</section>
			<!-- /.content -->
		</div>

		@endsection
