<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('/') }}">
              <img src="{{ asset('images/icon.png') }}" width="40px">
              UB Inventory
            </a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('/') }}">UB</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
              <li class="">
                <a class="nav-link" href="{{ route('/') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
              </li>
            <li class="menu-header">Data Inventory</li>
              @if(auth()->user()->role == 'admin')
              <li class="">
                <a class="nav-link" href="{{ route('fakultas.index') }}"><i class="far fa-building"></i> <span>Fakultas</span></a>
              </li>
              <li class="">
                <a class="nav-link" href="{{ route('jurusan.index') }}"><i class="fas fa-graduation-cap"></i> <span>Jurusan</span></a>
              </li>
              <li class="">
                <a class="nav-link" href="{{ route('ruangan.index') }}"><i class="fas fa-school"></i> <span>Ruangan</span></a>
              </li>
              @endif
              <li class="">
                <a class="nav-link" href="{{ route('barang.index') }}"><i class="fas fa-shopping-bag"></i> <span>Barang</span></a>
              </li>
          </ul>
        </aside>
      </div>