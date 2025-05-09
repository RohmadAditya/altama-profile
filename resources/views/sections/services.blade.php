<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>{{ $title }}</title>
  <link rel="icon" href="{{ asset('assets/images/logo-altama.png') }}" type="image/png">


  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/templatemo-space-dynamic.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animated.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
</head>

<body>

  <!-- ***** Preloader ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

  <!-- ***** Header Area ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    @include('layouts.header')
  </header>

  <!-- ***** Content Area ***** -->
  {{-- services --}}
  @include('contents.services_content')
  
  @include('contents.web_types_content')

  @include('contents.clients_moving_content')

  @include('contents.cta_content')


  <!-- ***** Footer Area ***** -->
  <footer>
    @include('layouts.footer')
  </footer>


  <!-- Scripts -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/js/animation.js') }}"></script>
  <script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
  <script src="{{ asset('assets/js/templatemo-custom.js') }}"></script>

</body>

</html>