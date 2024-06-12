<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Argon Dashboard') }}</title>
    <!-- Favicon -->
    <link href="{{ url('/frontend/img/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ url('/frontend/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ url('/frontend/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ url('/frontend/css/argon.css?v=1.0.0') }}" rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->
    <link rel="apple-touch-icon" sizes="76x76" href="/frontend/argon/img/apple-icon.png">

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/frontend/argon/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/frontend/argon/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/frontend/argon/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/frontend/argon/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

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