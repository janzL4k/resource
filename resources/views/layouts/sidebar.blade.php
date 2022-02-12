<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">GenBI NTB </a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item ">
            <a href="{{  route('/') }}" class="nav-link active"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          <li class="menu-header">BERKAS</li>

          <li><a class="nav-link" href="{{ route('mahasiswa_penerima.index') }}"><i class="fas fa-users"></i><span> Penerima Beasiswa</span></a></li>
          <li><a class="nav-link" href="{{ route('mahasiswa_calon.index') }}"><i class="fas fa-users-cog"></i><span>Calon Penerima</span></a></li>

          <li class="nav-item ">
            <a href="/berkas" class="nav-link "><i class="fas fa-folder"></i> <span>Berkas Beasiswa</span></a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link "><i class="fas fa-bullhorn"></i> <span>Pengumuman</span></a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('data_kampus.index') }}" class="nav-link "><i class="fas fa-building"></i> <span>Data Kampus Penerima</span></a>
          </li>


          <li class="menu-header">PENGATURAN</li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
            <ul class="dropdown-menu">
              <li><a href="auth-forgot-password.html">Forgot Password</a></li>
              <li><a href="auth-login.html">Login</a></li>
              <li><a class="beep beep-sidebar" href="auth-login-2.html">Login 2</a></li>
              <li><a href="auth-register.html">Register</a></li>
              <li><a href="auth-reset-password.html">Reset Password</a></li>
            </ul>
          </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div>
    </aside>
  </div>
