@extends("layouts.frontend")
@section("content")
<main class="main">

<!-- Page Title -->
<div class="page-title" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpeg);">
  <div class="container position-relative">
    <h1>Contact</h1>
    <p>Siap Lapor Perikanan adalah platform inovatif yang memungkinkan para pelaku usaha perikanan untuk melaporkan aktivitas mereka dengan mudah dan akurat. Dengan teknologi terkini, kami menyediakan solusi yang mempermudah pengelolaan data tangkapan dan mempromosikan pengelolaan sumber daya kelautan yang berkelanjutan.</p>
   <nav class="breadcrumbs">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li class="current">Contact</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Contact Section -->
<section id="contact" class="contact section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
      <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6042939621084!2d107.70238037660656!3d-6.937805693062209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c2db4d0efe31%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sen!2sid!4v1718453199409!5m2!1sen!2sid" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Google Maps -->

    <div class="row gy-4">

      <div class="col-lg-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Address</h3>
            <p> Jl. A.H. Nasution No.105, Cipadung Wetan, Kec. Cibiru, , Kota Bandung, Jawa Barat 40614</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Us</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div><!-- End Info Item -->

      
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- /Contact Section -->

</main>

@endsection 