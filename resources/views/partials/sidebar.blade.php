<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-2" href="/admin">
        <img src="{{ asset('asset/img/brand/logo sematik oke.png') }}" class="navbar-brand-img" alt="...">
      </a>
        
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="{{ asset('asset/img/brand/logo sematik oke.png') }}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  ">
            <a class="nav-link {{ Request::is('/') ?  'active' : '' }}" href="{{ route('dashboard') }}">
              <i class="ni ni-tv-2 text-primary"></i> Beranda</a>

          </li>
          <li class="nav-item">
            
              <a class="nav-link {{ Request::is('mahasiswa') ?  'active' : '' }}"  href="{{ route('mahasiswa') }}">            
                <i class="fa fa-users text-yellow" aria-hidden="true" ></i>Mahasiswa 
               
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('evaluasi') ?  'active' : '' }}" href="{{ route('indexeval') }}">
              <i class="fa fa-clipboard-check text-info" aria-hidden="true" ></i> Evaluasi Mahasiswa 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('hasil') ?  'active' : '' }}" href="{{ route('indexhasil') }}">
              <i class="ni ni-bullet-list-67 text-success "></i> Hasil Evaluasi Mahasiswa
            </a>
          </li>
          @can('admin')
            
          <li class="nav-item">
            <a class="nav-link {{ Request::is('kelolaUser') ?  'active' : '' }}" href="{{ route('kelolaUser') }}">
              <i class="fa fa-user-graduate text-warning "></i> Kelola User
            </a>
          </li>
          @endcan          
          
        </ul>

        
      </div>
    </div>
    
  </nav>

  