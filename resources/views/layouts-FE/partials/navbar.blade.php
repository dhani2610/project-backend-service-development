<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top fw-bold shadow ">
    <div class="container">
      <a class="navbar-brand  " href="index.html">
      <div class="logo">
        <img src="{{ asset('frontend/img/logo.png') }}"   alt="" srcset="" />
      </div></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  " id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
          </li>
         
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Layanan
            </a>
            <ul
              class="dropdown-menu dropdown-menu-dark"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <li><a class="dropdown-item" href="{{ route('pembuatan-website') }}">Pembuatan Website</a></li>
              <li><a class="dropdown-item" href="{{ route('android') }}">Aplikasi Android</a></li>
              <li><a class="dropdown-item" href="{{ route('internet-marketing') }}">Internet Marketing</a></li>
              <li><a class="dropdown-item" href="{{ route('domain-hosting') }}">Domain & Hosting</a></li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('portfolio') }}">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('kontak') }}">Hubungi Kami</a>
          </li>
          
          
          <li class="nav-item">
            <a
              class="nav-link btn btn-secondary rounded-pill text-light"
              class="btn"
              href="{{ route('user.login') }}"
              >Sign in</a
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>