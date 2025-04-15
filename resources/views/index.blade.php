<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Altamasoft | Jasa Pembuatan Web, Aplikasi Android</title>
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
  <!-- ***** Preloader Start ***** -->
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
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    @include('layouts.header')
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Selamat Datang di Altamasoft</h6>
                <h2>Kami Membawa <em>Solusi Digital </em> &amp; <span>Inovasi</span> Teknologi</h2>
                <p>Altamasoft adalah perusahaan profesional yang bergerak di bidang jasa pembuatan website dan aplikasi mobile.</p>
                {{-- <form id="search" action="#" method="GET">
                  <fieldset>
                    <input type="address" name="address" class="email" placeholder="Your website URL..." autocomplete="on" required>
                  </fieldset>
                  <fieldset>
                    <button type="submit" class="main-button">Analyze Site</button>
                  </fieldset>
                </form> --}}
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('assets/images/logo-altama.png') }}" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- about --}}
  @include('contents.about_content')

  {{-- services --}}
  @include('contents.services_content')

  {{-- portofolio --}}
  @include('contents.portfolio_content')

  {{-- blog --}}
  @include('contents.blog_content')

  {{-- contact --}}
  @include('contents.contact_content')

  <!-- ***** Footer Area Start ***** -->
  <footer>
    @include('layouts.footer')
  </footer>
  <!-- ***** Footer Area End ***** -->

  <!-- Scripts -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/js/animation.js') }}"></script>
  <script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
  <script src="{{ asset('assets/js/templatemo-custom.js') }}"></script>

</body>
</html>