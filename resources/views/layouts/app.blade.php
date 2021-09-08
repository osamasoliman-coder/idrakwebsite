<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Idrak sport</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('/')}}assets/img/website/logo.png" rel="icon">
    <link href="{{asset('/')}}assets/img/website/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('/')}}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('/')}}assets/css/style.css" rel="stylesheet">


</head>
<body>
   @include('layouts.header')
   @yield('content')
   @include('layouts.footer')


  <!-- Vendor JS Files -->
  <script src="{{asset('/')}}assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('/')}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('/')}}assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{asset('/')}}assets/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('/')}}assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{asset('/')}}assets/vendor/counterup/counterup.min.js"></script>
  <script src="{{asset('/')}}assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{asset('/')}}assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{asset('/')}}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('/')}}assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/')}}assets/js/main.js"></script>

</body>
</html>
