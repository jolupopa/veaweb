<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('dashboard')}}" class="brand-link">
    <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Veainmuebles</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          {{ auth()->user()->name }}
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          	with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ route('dashboard')}}"
              class="nav-link {{ request()->is('home') ? 'active' : '' }}">
              <i class="nav-icon fa fa-list-ol"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ request()->is('properties*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->is('properties*') ? 'active' : '' }} ">
              <i class="nav-icon fa fa-home"></i>
              <p> Propiedades
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('properties.index')}}"
                class="nav-link {{ request()->is('properties') ? 'active' : '' }}">
                <i class="fa fa-plus nav-icon"></i>
                <p>Listar
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('properties.create')}}"
              class="nav-link {{ request()->is('properties/create') ? 'active' : '' }}">
              <i class="fa fa-plus nav-icon"></i>
              <p>Agregar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('properties.create')}}" class="nav-link">
              <i class="fa fa-plus nav-icon"></i>
              <p>En Captación</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview menu-close">
        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-user"></i>
          <p>
            Agentes &nbsp;&nbsp;
            <span class="badge badge-danger">10</span>
            <i class="right fa fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-plus nav-icon"></i>
              <p>Lista de Agentes</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-plus nav-icon"></i>
              <p>Nuevo Agente</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-list-ol"></i>
          <p>
            Dueños de propiedad
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-list-ol"></i>
          <p>
            Prospectos
            <span class="right badge badge-danger">20</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-list-ol"></i>
          <p>
            Transacciones
            <span class="right badge badge-danger">20</span>
          </p>
        </a>
      </li>
      <li class="nav-item has-treeview {{ request()->is('utilities*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ request()->is('utilities*') ? 'active' : '' }}">
          <i class="nav-icon fa fa-dashboard"></i>
          <p>
            Utilitarios
            <i class="right fa fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('categories.index')}}"
            class="nav-link {{ request()->is('utilities/categories') ? 'active' : '' }}">
            <i class="fa fa-circle-o nav-icon"></i>
            <p>Categorias</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa fa-circle-o nav-icon"></i>
            <p>Zonas Geograficas</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fa fa-th"></i>
        <p>
          Contactos
          <span class="right badge badge-danger">New</span>
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fa fa-th"></i>
        <p>
          Agenda
          <span class="right badge badge-danger">New</span>
        </p>
      </a>
    </li>

    <li class="nav-item has-treeview menu-close">
      <a href="#" class="nav-link"> <i class="nav-icon fa fa-home"></i>
        <p> web site &nbsp;&nbsp;
          <span class="badge badge-danger">20</span>
          <i class="right fa fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item has-treeview menu-close">
          <a href="#" class="nav-link"> <i class="nav-icon fa fa-home"></i>
            <p> Control de Acceso &nbsp;&nbsp;
              <span class="badge badge-danger">20</span>
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('properties.index')}}" class="nav-link">
                <i class="fa fa-plus nav-icon"></i>
                <p>Usuarios</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('properties.create')}}" class="nav-link">
                <i class="fa fa-plus nav-icon"></i>
                <p>Roles</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('properties.create')}}" class="nav-link">
                <i class="fa fa-plus nav-icon"></i>
                <p>Permisos</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ route('properties.index')}}" class="nav-link">
            <i class="fa fa-plus nav-icon"></i>
            <p>Banner</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('properties.create')}}" class="nav-link">
            <i class="fa fa-plus nav-icon"></i>
            <p>Destacados</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('properties.create')}}" class="nav-link">
            <i class="fa fa-plus nav-icon"></i>
            <p>Articulos</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('properties.create')}}" class="nav-link">
            <i class="fa fa-plus nav-icon"></i>
            <p>Clasificados</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('properties.create')}}" class="nav-link">
            <i class="fa fa-plus nav-icon"></i>
            <p>Configuracion</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>