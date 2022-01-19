<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ asset('index3.html') }}" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="Transportes Martínez" class="brand-image img-circle elevation-3" style="opacity: 1">
    <span class="brand-text font-weight-light"> {{ config('app.name', 'Torton Inc.') }}</span>
    <!--<span class="brand-text font-weight-light"> Transportes Martínez</span>-->
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{ asset('#') }}" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    {{-- <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <li class="nav-header">CATÁLOGOS</li>
        <li class="nav-item">
          <a href="{{ asset('#') }}" class="nav-link">
            <i class="nav-icon fas fa-industry"></i>
            <p>Clientes<i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('clientes') }}" class="nav-link">
                <i class="far fa-eye  nav-icon"></i>
                <p>Ver Clientes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('./index2.html') }}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Agregar Clientes</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ asset('#') }}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Operadores<i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('operadores') }}" class="nav-link">
                <i class="far fa-eye nav-icon"></i>
                <p>Ver Operadores</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('./index2.html') }}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Agregar Operadores</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ asset('#') }}" class="nav-link">
            <i class="nav-icon fas fa-truck"></i>
            <p>Unidades<i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('unidades') }}" class="nav-link">
                <i class="far fa-eye nav-icon"></i>
                <p>Ver Unidades</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('./index2.html') }}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Agregar Unidades</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">EDICIÓN</li>
        <li class="nav-item">
          <a href="{{ asset('#') }}" class="nav-link">
            <i class="nav-icon fas fa-boxes"></i>
            <p>Entregas<i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('entregas') }}" class="nav-link">
                <i class="far fa-eye nav-icon"></i>
                <p>Ver Entregas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('./index2.html') }}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Agregar Entregas</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ asset('#') }}" class="nav-link">
            <i class="nav-icon fas fa-route"></i>
            <p>Viajes<i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('viajes') }}" class="nav-link">
                <i class="far fa-eye nav-icon"></i>
                <p>Ver Viajes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('./index2.html') }}" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Agregar Viajes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('./index3.html') }}" class="nav-link">
                <i class="fas fa-coins nav-icon"></i>
                <p>Anticipos de viaje</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">INFO</li>
        <li class="nav-item">
          <a href="{{ asset('#') }}" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p>Desglose de viajes<i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('desglose') }}" class="nav-link">
                <i class="far fas fa-thumbs-up nav-icon"></i>
                <p>Viajes Activos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('desglose') }}" class="nav-link">
                <i class="fas fa-search-location nav-icon"></i>
                <p>Viajes en revisión</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('desglose') }}" class="nav-link">
                <i class="far fa-pause-circle nav-icon"></i>
                <p>Viajes por asignar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('desglose') }}" class="nav-link">
                <i class="fas fa-flag-checkered nav-icon"></i>
                <p>Viajes Finalizados</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('desglose') }}" class="nav-link">
                <i class="fas fa-circle-notch nav-icon"></i>
                <p>Todos mis Viajes</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item">
          <a href="{{ asset('#') }}" class="nav-link">
            <i class="nav-icon fas fa-search"></i>
            <p>Buscar<i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ asset('pages/search/simple.html') }}" class="nav-link">
                <i class="fas fa-search nav-icon"></i>
                <p>Búsqueda simple</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('pages/search/enhanced.html') }}" class="nav-link">
                <i class="fas fa-search-plus nav-icon"></i>
                <p>Búsqueda específica</p>
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