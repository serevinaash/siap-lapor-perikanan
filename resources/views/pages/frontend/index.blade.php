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
            <button type="submit" class="btn btn-register text-white" onclick="location.href='{{ route('pages.dashboard.index') }}'">Dashboard Admin</button>
        @endif
       
 

              </div>
          @else
              <button type="submit" class="btn btn-login text-white" onclick="location.href='{{ route('login') }}'">Login</button>
              <button type="submit" class="btn btn-register text-white" onclick="location.href='{{ route('register') }}'">Register</button>
          @endauth

          </div>




            <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">
    <div class="col-lg-3 col-6">
        <div class="stats-item text-center">
            <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{ $totalJumlahProduksi }}"></span>
            <p>Total Perikanan</p>
        </div>
    </div><!-- End Stats Item -->

    <div class="col-lg-3 col-6">
        <div class="stats-item text-center">
            <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{ $produksiProses }}"></span>
            <p>Produksi Proses</p>
        </div>
    </div><!-- End Stats Item -->

    <div class="col-lg-3 col-6">
        <div class="stats-item text-center">
            <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{ $produksiSelesai }}"></span>
            <p>Produksi Selesai</p>
        </div>
    </div><!-- End Stats Item -->

    <div class="col-lg-3 col-6">
        <div class="stats-item text-center">
            <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{ $totalProduksi }}"></span>
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
          <h4 class="title">Statistik Real Time</h4>
          <p class="description">Akses statistik produksi perikanan secara real time untuk mendukung keputusan yang tepat.</p>
          <a href="{{ route('reports') }}" class="readmore stretched-link"><span>Pelajari Lebih Lanjut</span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="icon flex-shrink-0"><i class="fa-solid fa-fish-fins"></i></div>
        <div>
          <h4 class="title">Pemantauan Produksi</h4>
          <p class="description">Monitor produksi perikanan secara efisien dengan fitur-fitur yang disediakan aplikasi.</p>
          <a href="{{ route('download') }}" class="readmore stretched-link"><span>Pelajari Lebih Lanjut</span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="icon flex-shrink-0"><i class="fa-solid fa-clipboard-list"></i></div>
        <div>
          <h4 class="title">Pengolahan Data</h4>
          <p class="description">Proses pengolahan data produksi perikanan untuk informasi yang akurat dan terpercaya.</p>
          <a href="{{ route('download') }}" class="readmore stretched-link"><span>Pelajari Lebih Lanjut</span><i class="bi bi-arrow-right"></i></a>
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
        <h3>Tenang Aplikasi Siap Lapor Perikanan</h3>
        <p>
          Aplikasi Siap Lapor Perikanan (SiapLapor) adalah platform berbasis web untuk pelaporan produksi perikanan. Ini dirancang untuk menyimpan data produksi perikanan guna menyediakan statistik yang akurat, relevan, dan tepat waktu.
        </p>
        <ul>
          <li>
            <i class="bi bi-diagram-3"></i>
            <div>
              <h5>Memudahkan Pengumpulan Data</h5>
              <p>Aplikasi ini memudahkan proses pengumpulan data produksi perikanan sehingga informasi dapat diperoleh secara real time.</p>
            </div>
          </li>
          <li>
            <i class="bi bi-fullscreen-exit"></i>
            <div>
              <h5>Proses Pengolahan Data Statistik</h5>
              <p>Data statistik perikanan diolah dengan aplikasi ini untuk menghasilkan informasi statistik yang akurat dan relevan.</p>
            </div>
          </li>
          <li>
            <i class="bi bi-broadcast"></i>
            <div>
              <h5>Manfaat untuk Pemangku Kepentingan</h5>
              <p>Aplikasi ini memberikan manfaat signifikan bagi pemangku kepentingan dalam industri perikanan.</p>
            </div>
          </li>
        </ul>
      </div>

    </div>

  </div>

</section><!-- /About Section -->




@endsection