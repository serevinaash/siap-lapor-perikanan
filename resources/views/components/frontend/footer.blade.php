   
    <footer id="footer" class="footer">

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-5 col-md-12 footer-about">
      <a href="index.html" class="logo d-flex align-items-center">
        <h1 class="sitename">Siap Lapor</span></h1>
        </a>
      <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
      <div class="social-links d-flex mt-4">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="https://dlhkp.kebumenkab.go.id/index.php">Kebumen Regency</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Download</a></li>
        <li><a href="#">Terms of service</a></li>
        <li><a href="#">Privacy policy</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Download Reports</h4>
      <ul>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Product Management</a></li>
        <li><a href="#">Marketing</a></li>
        <li><a href="#">Graphic Design</a></li>
      </ul>
    </div>

    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
      <h4>Contact Us</h4>
      <p> Jl. A.H. Nasution No.105, Cipadung Wetan, Kec. Cibiru, </p>
      <p>Kota Bandung, Jawa Barat 40614</p>
      <p>Indonesia</p>
      <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
      <p><strong>Email:</strong> <span>info@example.com</span></p>
    </div>

  </div>
</div>

<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="px-1 sitename">SiapLapor</strong> <span>All Rights Reserved</span></p>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you've purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>

</footer>


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
<script src="/frontend/argon/js/core/popper.min.js"></script>
<script src="/frontend/argon/js/core/bootstrap.min.js"></script>
<script src="/frontend/argon/js/plugins/perfect-scrollbar.min.js"></script>
<script src="/frontend/argon/js/plugins/smooth-scrollbar.min.js"></script>
<script src="/frontend/argon/js/plugins/chartjs.min.js"></script>
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
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/frontend/argon/js/argon-dashboard.min.js?v=2.0.4"></script>
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ url('/frontend/lp/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('/frontend/lp/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ url('/frontend/lp/vendor/aos/aos.js') }}"></script>
<script src="{{ url('/frontend/lp/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ url('/frontend/lp/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ url('/frontend/lp/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ url('/frontend/lp/js/main.js') }}"></script>
