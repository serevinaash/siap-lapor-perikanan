<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Siap<span>Lapor</span> </h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
        <ul>
          <li><a href="{{ route('home') }}" class="active">Home</a></li>
          <li><a href="{{ route('reports') }}">Report</a></li>
          <li><a href="{{ route('team') }}">Team</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Profile
                </a>
                <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="{{ route('profile.show') }}">View Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    @auth 
                    @if(Auth::user()->roles == "ADMIN")
                        <li><a class="dropdown-item" href="{{ route('pages.dashboard.index') }}">Dashboard Admin</a></li>
                    @elseif(Auth::user()->roles == "PETUGAS")
                        <li><a class="dropdown-item" href="{{ route('dashboard.index') }}">Dashboard Petugas</a></li>
                    @endif
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
                        @endauth

            </div>
      </nav>

      <a class="btn-getstarted" href="{{ route('download') }}">Download</a>
      

    </div>
  </header>
