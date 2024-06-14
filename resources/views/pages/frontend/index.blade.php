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
<div class="container mt-4">
        <div class="row">
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Produksi Overview</h6>
                        <p class="text-sm mb-0">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold"></span> in 2024
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
          </div>
        </div>
          
                    <div style="width: 600px; margin: auto; padding: 50px;">
                        <canvas id="kategoriIkanChart"></canvas>
                    </div>


                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart">
                            <!-- Chart wrapper -->
                            <canvas id="chart-sales" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>    
                         <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Data untuk bar chart
            var ctxBar = document.getElementById('chart-bar').getContext('2d');
            var barChart = new Chart(ctxBar, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($categories) !!},
                    datasets: [{
                        label: 'Jumlah Produksi',
                        data: {!! json_encode($values) !!},
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Jumlah Produksi'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Nama Ikan'
                            }
                        }
                    }
                }
            });

            // Data untuk line chart
            var ctxLine = document.getElementById('chart-line').getContext('2d');
            var lineChart = new Chart(ctxLine, {
                type: 'line',
                data: {
                    labels: {!! json_encode($labels) !!},
                    datasets: [{
                        label: 'Jumlah Produksi Bulanan',
                        data: {!! json_encode($monthlyValues) !!},
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        fill: false
                    }]
                },
                options: {
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Bulan'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Jumlah Produksi'
                            }
                        }
                    }
                }
            });
        });
    </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

@endsection