<header id="header" class="fixed-top" role="banner">
	<div class="container ">
		<div class="row d-flex">
			<div class="col-auto p-2">
				<span id="button-menu" class="fas fa-bars fa-2x fuxia"></span>
			</div>
			<div class="col-auto col-md-4 col-lg-3 mr-auto align-self-center px-0">
				<a class="nounderline" href={{ url('/')}}><span class=" logo-texto px-0">VeaInmuebles</span></a>
			</div>

			<nav class="col-auto menu px-0 d-flex align-items-center justify-content-end">
				@guest


				<a class="link-auth nounderline" href="{{ route('login') }}">{{ __('Login') }} </a>


				@if (Route::has('register'))
				<a class="link-auth nounderline" href="{{ route('register') }}">{{ __('Register') }} </a>
				@endif


				@else
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('dashboard') }}">
							{{ __('Backend') }}
						</a>
						<a class="dropdown-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
				@endguest
			</nav>
		</div>
	</div>
	<nav class="navegacion">
		<ul class="menu">
			<li class="active"><a href="#home">Inicio</a></li>
			<li><a href="#destacados">Destacados</a></li>
			<li><a href="#lista-inmuebles">Lista de inmuebles</a></li>
			<li><a href="#nosotros">Nosotros</a></li>
			<li><a href="#agentes">Agentes</a></li>
			<li><a href="#servicios">Servicios</a></li>
			<li><a href="#blog">Blog</a></li>
			<li><a href="#clasificados">Clasificados</a></li>
			<li><a href="#contacto">Contacto</a></li>
			<li><a href="#clasificados">FIN</a></li>
		</ul>
	</nav>
</header>