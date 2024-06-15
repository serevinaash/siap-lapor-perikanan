@extends("layouts.frontend")
@section("content")
<main class="main">

<!-- Page Title -->
<div class="page-title" data-aos="fade" style="background-image: url('{{ asset('/frontend/lp/img/page-title-bg.jpeg') }}')">
  <div class="container position-relative">
    <h1>Team Members</h1>
    <p>Tim Developer Website</p>
    <nav class="breadcrumbs">
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Team Section -->
<section id="team" class="team section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <span>Our Team<br></span>
  <h2>Our Team</h2>
</div><!-- End Section Title -->

<div class="container">

  <div class="row">

    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
      <div class="member">
        <img src="{{ asset('/frontend/lp/img/team/team-1.png') }}" class="img-fluid" alt="">
        <div class="member-content">
          <h4>Rizki Surya Gani</h4>
          <span>Front-End Developer</span>
         
          <div class="social">
            <a href="https://github.com/rizkisg"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.instagram.com/rzkysry_/?hl=en"><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
      <div class="member">
        <img src="{{ asset('/frontend/lp/img/team/team-2.png') }}" class="img-fluid" alt="">
        <div class="member-content">
          <h4>Serevina Sherly Maulida</h4>
          <span>Back-End Developer</span>
      
          <div class="social">
            <a href="https://github.com/serevinaash"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.instagram.com/serevinaash/?hl=en"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/serevinasherly/"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
      <div class="member">
        <img src="{{ asset('/frontend/lp/img/team/team-4.png') }}" class="img-fluid" alt="">
        <div class="member-content">
          <h4>Yassar Malik Arassyid</h4>
          <span>Back-End Developer</span>
         
          <div class="social">
            <a href="https://www.github.com/yassar2"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.instagram.com/yassararrasyid12/?hl=en"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/yassar-malik-arrasyid-12496a2b7/"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
      <div class="member">
        <img src="{{ asset('/frontend/lp/img/team/team-3.png') }}" class="img-fluid" alt="">
        <div class="member-content">
          <h4>Yunisa Dwi Indrayani</h4>
          <span>Back-End Developer</span>
        
          <div class="social">
            <a href="https://www.github.com/yunisadwi"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.instagram.com/yunisa_dwi/?hl=en"><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="600">
      <div class="member">
        <img src="{{ asset('/frontend/lp/img/team/team-6.png') }}" class="img-fluid" alt="">
        <div class="member-content">
          <h4>Zulfan Al-Zahwan Putra Ashadi</h4>
          <span>Front-End Developer</span>
     
          <div class="social">
            <a href="https://github.com/Zahwan07"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.instagram.com/zah1______/?hl=en"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/zahwan-ashadi/"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div><!-- End Team Member -->
  </div>

</div>

</section><!-- /Team Section -->

</main>


@endsection 