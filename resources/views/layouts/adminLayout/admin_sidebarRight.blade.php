<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
	<!-- Sidebar Menu -->
	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          	with font-awesome or any other icon font library -->
          	<li class="nav-item">
          		<a class="nav-link" href="{{ url('/')}}">
          			<i class="nav-icon fa fa-home"></i>
          		VeaInmuebles</a>
          	</li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/')}}">
                <i class="nav-icon fa fa-user"></i>
              Perfil</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="nav-icon fa fa-power-off text-danger"></i>
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->

    </aside>