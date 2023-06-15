@if(auth()->check())
@if(auth()->user()->role == 'admin')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('AdminLTE-3.2.0') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="http://127.0.0.1:8000/home" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-box"></i>
            <p>
              Barang
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('barang.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('kategori.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Kategori Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('stok.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Stok Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('gudang.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Gudang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('outlet.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Outlet</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Produksi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('produksi.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Produksi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('stok_produksi.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Stok Produksi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('bahan_baku.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Bahan Baku</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('tenaga_kerja.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Tenaga Kerja</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('biaya-produksi.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Biaya Produksi</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Administrator
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Pengguna</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              {{ Auth::user()->name }}
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" method="POST">
                <i class="fas fa-sign-out-alt"></i>
                <p>{{ __('Logout') }}</p>
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
@elseif(auth()->user()->role == 'gudang')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('AdminLTE-3.2.0') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="http://127.0.0.1:8000/home" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-box"></i>
            <p>
              Barang
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('barang.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('kategori.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Kategori Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('stok.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Stok Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('gudang.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Gudang</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              {{ Auth::user()->name }}
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" method="POST">
                <i class="fas fa-sign-out-alt"></i>
                <p>{{ __('Logout') }}</p>
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
@elseif(auth()->user()->role == 'produksi')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('AdminLTE-3.2.0') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="http://127.0.0.1:8000/home" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Produksi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('produksi.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Produksi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('stok_produksi.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Stok Produksi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('bahan_baku.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Bahan Baku</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('tenaga_kerja.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Tenaga Kerja</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              {{ Auth::user()->name }}
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" method="POST">
                <i class="fas fa-sign-out-alt"></i>
                <p>{{ __('Logout') }}</p>
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
@endif
@endif<