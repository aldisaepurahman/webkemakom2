<section id="header">
  <nav class="navbar navbar-expand-lg fixed-top">
  <a class="navbar-brand" href="{{ url('/') }}">
    <img src="{{ asset('assets/images/logo-kemakom.png') }}" width="30" height="30" class="d-inline-block align-top">
    Keluarga Mahasiswa Komputer
  </a>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-bars"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right backColor" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ url('/') }}">HOME</a>
              <a class="dropdown-item" href="{{ url('/bem') }}">BEM</a>
              <a class="dropdown-item" href="{{ url('/dpm') }}">DPM</a>
              <a class="dropdown-item" href="{{ url('/berita') }}">BERITA</a>
              <a class="dropdown-item" href="{{ url('/event') }}">EVENT</a>
              <a class="dropdown-item" href="{{ url('/pixel') }}">PIXEL</a>
              <a class="dropdown-item" href="{{ url('/youtube') }}">VIDEO</a>
              <a class="dropdown-item" href="{{ url('/about') }}">ABOUT KEMAKOM</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </section>