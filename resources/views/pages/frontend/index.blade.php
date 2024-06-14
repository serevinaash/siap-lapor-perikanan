@extends("layouts.frontend")
@section("content")
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="  {{url("/frontend/lp/img/world-dotted-map.png")}} " alt="" class="hero-bg" data-aos="fade-in">
          <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2 data-aos="fade-up">Sistem Aplikasi Laporan Produksi Perikanan</h2>
            <p data-aos="fade-up" data-aos-delay="100">Meningkatkan Efisiensi dan Kecepatan Pelaporan Produksi Perikanan</p>
            <div class="d-flex justify-content-center align-items-center mb-3" data-aos="fade-up" data-aos-delay="200">
                @auth
                    <div class="btn-group">
                    @if(Auth::user()->roles == "ADMIN")
                        <button type="button" class="btn btn-dashboard" onclick="location.href='{{ route('dashboard.index') }}'">Dashboard Admin</button>
                    @endif
                    @if(Auth::user()->roles == "PETUGAS")
                        <button type="button" class="btn btn-dashboard" onclick="location.href='{{ route('petugas.index') }}'">Dashboard Petugas</button>
                    @endif
                    <button type="button" class="btn btn-profile" onclick="location.href='#profile-dropdown'">Profile</button>
                    </div>
                @else
                    <button type="button" class="btn btn-login" onclick="location.href='{{ route('login') }}'">Login</button>
                    <button type="button" class="btn btn-register" onclick="location.href='{{ route('register') }}'">Register</button>
                @endauth
                </div>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="0" class="purecounter">232</span>
                  <p>Total Perikanan</p>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="0" class="purecounter">300</span>
                  <p>Produksi Proses</p>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="27" data-purecounter-duration="0" class="purecounter">27</span>
                  <p>Produksi Selesai</p>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="0" class="purecounter">25</span>
                  <p>Total Produksi</p>
                </div>
              </div><!-- End Stats Item -->
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src=" {{url("/frontend/lp/img/hero-img.png")}} " class="img-fluid mb-3 mb-lg-0" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->
<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section">

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
      <div class="icon flex-shrink-0"><i class="fa-solid fa-chart-simple"></i></div>
      <div>
        <h4 class="title">Lorem Ipsum</h4>
        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
        <a href="reports.html" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
    <!-- End Service Item -->

    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
      <div class="icon flex-shrink-0"><i class="fa-solid fa-fish-fins"></i></div>
      <div>
        <h4 class="title">Dolor Sitema</h4>
        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        <a href="reports.html" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
      <div class="icon flex-shrink-0"><i class="fa-solid fa-clipboard-list"></i></div>
      <div>
        <h4 class="title">Sed ut perspiciatis</h4>
        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        <a href="download.html" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div><!-- End Service Item -->

  </div>

</div>

</section><!-- /Featured Services Section -->


    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
            <img src="{{url("/frontend/lp/img/about.jpg")}}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>

          <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
            <h3>About Us</h3>
            <p>
              Sistem Aplikasi Laporan Produksi Perikanan (SiapLapor) merupakan aplikasi mengenai laporan produksi perikanan yang berbasis web, yang 
              dibuat untuk penyimpanan data-data produksi perikanan yang nantinya akan dijadikan data statistik perikanan, agar Memudahkan proses pengumpulan data produksi perikanan sehingga dapat diperoleh data real time, dan Memudahkan proses pengolahan data statistik perikanan sehingga dapat menghasilkan informasi statistik yang akurat, relevan, dan tepat waktu.

            </p>
            <ul>
              <li>
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                  <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                </div>
              </li>
              <li>
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                </div>
              </li>
              <li>
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Voluptatem et qui exercitationem</h5>
                  <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam</p>
                </div>
              </li>
            </ul>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->



@endsection