<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="">GenBI NTB </a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">GN</a>
      </div>
      <ul class="sidebar-menu">

        <li class="menu-header">Dashboard</li>
        <li class="nav-link {{ request()->routeIs('admin.dashboard.index*') ? 'active' : '' }}">
          <a href="{{  route('admin.dashboard.index') }}" class="nav-link active"><i class="fas fa-fire"></i><span>Dashboard</span></a>

          <li class="menu-header">BERKAS</li>
          <li class="nav-link {{ request()->routeIs('mahasiswa_penerima.index*') ? 'active' : '' }}">
            <a href="{{  route('mahasiswa_penerima.index') }}" class="nav-link active"><i class="fas fa-users"></i><span> Penerima Beasiswa</span></a></li>

            <li class="nav-link {{ request()->routeIs('mahasiswa_calon.index*') ? 'active' : '' }}">
                <a href="{{  route('mahasiswa_calon.index') }}" class="nav-link active"><i class="fas fa-users-cog"></i><span> Calon Penerima</span></a></li>

            <li class="nav-link {{ request()->routeIs('berkas.index*') ? 'active' : '' }}">
                <a href="{{ route('berkas.index') }}" class="nav-link active"><i class="fas fa-folder"></i><span> Berkas Beasiswa</span></a></li>

            <li class="nav-link {{ request()->routeIs('pengumuman.index*') ? 'active' : '' }}">
            <a href="{{ route('pengumuman.index') }}" class="nav-link active"><i class="fas fa-bullhorn"></i><span> Pengumuman</span></a></li>

            <li class="nav-link {{ request()->routeIs('data.kampus.index*') ? 'active' : '' }}">
                <a href="{{ route('data.kampus.index') }}" class="nav-link active"><i class="fas fa-building"></i><span> Data Kampus Penerima</span></a></li>

          <li class="menu-header">PENGATURAN</li>
          <li class="nav-item">
            <li class="nav-link {{ request()->routeIs('profil.index*') ? 'active' : '' }}">
                <a href="{{ route('profil.index') }}" class="nav-link active"><i class="fas fa-user"></i><span> Profile</span></a></li>
          </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
                class="btn btn-primary btn-lg btn-block btn-icon-split">
                 <i class="fas fa-rocket"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
        </div>
    </aside>
  </div>
