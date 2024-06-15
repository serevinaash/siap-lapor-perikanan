@extends("layouts.frontend")
@section("content")


<main class="main">

<!-- Page Title -->
<div class="page-title" data-aos="fade" style="background-image: url('{{ asset("/frontend/lp/img/page-title-bg.jpeg") }}')">
<div class="container position-relative">
    <h1>About</h1>
    <p>Siap Lapor Perikanan adalah platform inovatif yang memungkinkan para pelaku usaha perikanan untuk melaporkan aktivitas mereka dengan mudah dan akurat. Dengan teknologi terkini, kami menyediakan solusi yang mempermudah pengelolaan data tangkapan dan mempromosikan pengelolaan sumber daya kelautan yang berkelanjutan.</p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li class="current">About</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->
      <!-- Faq Section -->
      <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <span>Statistik Produksi Ikan</span>
          <h2>Statistik Produksi Ikan</h2>
          <p>statistika perbulan</p>
        </div><!-- End Section Title -->
  
  

</section><!-- /Featured Services Section -->
<div class="container mt-4">
    <div class="row justify-content-center"> <!-- Menengahkan row -->
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
    </div>
</div>


 <!-- Testimonials Section -->
 <section id="testimonials" class="testimonials section">

<img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="swiper">
    <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        }
      }
    </script>
    <div class="swiper-wrapper">

<div class="swiper-slide">
  <div class="testimonial-item">
    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
    <h3>Saul Goodman</h3>
    <h4>CEO & Founder</h4>
    <div class="stars">
      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
    </div>
    <p>
      <i class="bi bi-quote quote-icon-left"></i>
      <span>Siap Lapor Perikanan adalah solusi yang luar biasa! Platform ini tidak hanya memudahkan kami dalam melaporkan aktivitas perikanan, tetapi juga meningkatkan efisiensi operasional kami secara signifikan.</span>
      <i class="bi bi-quote quote-icon-right"></i>
    </p>
  </div>
</div><!-- End testimonial item -->

<div class="swiper-slide">
  <div class="testimonial-item">
    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
    <h3>Sara Wilsson</h3>
    <h4>Designer</h4>
    <div class="stars">
      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
    </div>
    <p>
      <i class="bi bi-quote quote-icon-left"></i>
      <span>Siap Lapor Perikanan telah memberikan kami kemudahan yang luar biasa dalam melacak dan melaporkan data tangkapan dengan akurat. Saya sangat merekomendasikan platform ini!</span>
      <i class="bi bi-quote quote-icon-right"></i>
    </p>
  </div>
</div><!-- End testimonial item -->

<div class="swiper-slide">
  <div class="testimonial-item">
    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
    <h3>Jena Karlis</h3>
    <h4>Store Owner</h4>
    <div class="stars">
      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
    </div>
    <p>
      <i class="bi bi-quote quote-icon-left"></i>
      <span>Siap Lapor Perikanan telah memberikan kami alat yang sangat berguna untuk mengelola operasi perikanan kami. Sangat terkesan dengan kemudahan penggunaannya!</span>
      <i class="bi bi-quote quote-icon-right"></i>
    </p>
  </div>
</div><!-- End testimonial item -->

<div class="swiper-slide">
  <div class="testimonial-item">
    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
    <h3>Matt Brandon</h3>
    <h4>Freelancer</h4>
    <div class="stars">
      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
    </div>
    <p>
      <i class="bi bi-quote quote-icon-left"></i>
      <span>Siap Lapor Perikanan sangat membantu saya dalam mengelola dan melaporkan data perikanan dengan cepat dan efisien. Sangat direkomendasikan untuk para profesional perikanan!</span>
      <i class="bi bi-quote quote-icon-right"></i>
    </p>
  </div>
</div><!-- End testimonial item -->

<div class="swiper-slide">
  <div class="testimonial-item">
    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
    <h3>John Larson</h3>
    <h4>Entrepreneur</h4>
    <div class="stars">
      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
    </div>
    <p>
      <i class="bi bi-quote quote-icon-left"></i>
      <span>Siap Lapor Perikanan adalah solusi yang sangat diperlukan dalam industri perikanan modern. Saya sangat puas dengan kemudahan dan kehandalannya!</span>
      <i class="bi bi-quote quote-icon-right"></i>
    </p>
  </div>
</div><!-- End testimonial item -->

</div>
<div class="swiper-pagination"></div>
</div>


</section><!-- /Testimonials Section -->
<section id="faq" class="faq section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Kategori Ikan</span>
        <h2>Kategori Ikan</h2>
        <p>Kategori Ikan Dan Jumlah Ikan</p>
      </div><!-- End Section Title -->

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
            var ctx1 = document.getElementById("chart-line").getContext("2d");

            var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

            gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
            gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
            gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');

            new Chart(ctx1, {
                type: "line",
                data: {
                    labels: {!! json_encode($labels) !!}, // Dynamic labels for months
                    datasets: [{
                        label: "Jumlah Produksi Bulanan",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#5e72e4",
                        backgroundColor: gradientStroke1,
                        borderWidth: 3,
                        fill: true,
                        data: {!! json_encode($monthlyValues) !!}, // Dynamic data for monthly production
                        maxBarThickness: 6
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: '#fbfbfb',
                                font: {
                                    size: 11,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#ccc',
                                padding: 20,
                                font: {
                                    size: 11,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                    },
                },
            });
        });
    </script>

        <script>
        document.addEventListener('DOMContentLoaded', function () {
            var canvasElement = document.getElementById('kategoriIkanChart');
            console.log(canvasElement);  // Debugging: pastikan elemen canvas ditemukan

            if (canvasElement) {  // Pastikan elemen canvas ditemukan
                var ctx = canvasElement.getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: {!! json_encode($categories) !!},
                        datasets: [{
                            label: 'Kategori Ikan',
                            data: {!! json_encode($values) !!},
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Kategori Ikan'
                            }
                        }
                    }
                });
            }
        });
        </script>

@endsection