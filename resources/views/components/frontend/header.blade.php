<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ url('/frontend/lp/img/hero-img.png') }}" type="image/png">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('/frontend/lp/img/favicon.png') }}" rel="icon">
    <link href="{{ url('/frontend/lp/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('/frontend/lp/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/frontend/lp/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('/frontend/lp/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('/frontend/lp/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ url('/frontend/lp/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('/frontend/lp/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Main CSS File -->
<link href="{{ url('/frontend/lp/css/main.css') }}" rel="stylesheet">


    <script>
  document.addEventListener('DOMContentLoaded', function () {
    var brandDropdown = document.getElementById('brand-dropdown');
    
    brandDropdown.addEventListener('mouseenter', function () {
      var brandDropdownMenu = document.querySelector('#brand-dropdown > ul');
      brandDropdownMenu.classList.remove('hidden');
    });

    brandDropdown.addEventListener('mouseleave', function () {
      var brandDropdownMenu = document.querySelector('#brand-dropdown > ul');
      brandDropdownMenu.classList.add('hidden');
    });
  });
</script>

</head>

<body>
<!-- Your body content -->
</body>
</html>