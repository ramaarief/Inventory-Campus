<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('/') }}">UB Inventory</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('/') }}">UB</a>
          </div>
          <ul class="sidebar-menu">
              <li class="">
                <a class="nav-link" href="{{ route('/') }}"><i class="far fa-square"></i> <span>Dashboard</span></a>
              </li>
              @if(auth()->user()->role == 'admin')
              <li class="">
                <a class="nav-link" href="{{ route('fakultas.index') }}"><i class="far fa-square"></i> <span>Fakultas</span></a>
              </li>
              <li class="">
                <a class="nav-link" href="{{ route('jurusan.index') }}"><i class="far fa-square"></i> <span>Jurusan</span></a>
              </li>
              <li class="">
                <a class="nav-link" href="{{ route('ruangan.index') }}"><i class="far fa-square"></i> <span>Ruangan</span></a>
              </li>
              @endif
              <li class="">
                <a class="nav-link" href="{{ route('barang.index') }}"><i class="far fa-square"></i> <span>Barang</span></a>
              </li>
          </ul>
        </aside>
      </div>