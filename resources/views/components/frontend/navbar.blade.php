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
          <li><a href="{{ route('reports') }}">Reports</a></li>
          <li><a href="{{ route('download') }}">Download</a></li>
          <li><a href="{{ route('team') }}">Team</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="send-report.html">Send a Report</a>

    </div>
  </header>
