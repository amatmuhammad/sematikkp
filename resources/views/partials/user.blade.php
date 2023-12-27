
  

<ul class="navbar-nav align-items-center d-none d-md-flex">
    <li class="nav-item dropdown">
      <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="media align-items-center">
          <span class="avatar avatar-sm rounded-circle">
            <img alt="Image placeholder" src="{{ asset('asset/img/brand/LOGO UHO.png') }}">
          </span>
          <div class="media-body ml-2 d-none d-lg-block">
            <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->username }}</span>
          </div>
        </div>
      </a>
      <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
        <a href="{{ route('logout') }}" class="dropdown-item">
          <i class="ni ni-user-run"></i>
          <span>Keluar</span>
        </a>
      </div>
    </li>
  </ul>

