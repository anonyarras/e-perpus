<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" type="image/png" href="{{ asset('landing/assets/images/logo.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Perpustakaan SMPN 1 Sukaraja</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('landing/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('landing/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/templatemo-space-dynamic.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/owl.css')}}">
    @livewireStyles()
<!--

TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
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
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{route('home')}}" class="logo">
              <h4>e<span>-Perpus </span>SMPN 1 Sukaraja </h4>
            </a>

            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#portfolio">List Buku</a></li>

              <li class="scroll-to-section"><div class="main-red-button"><a href="{{route('login')}}">Login</a></div></li>
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Selamat Datang Di e-Perpus</h6>
                <h2>Membaca <em>Itu</em>  <span>Indah</span></h2>
                <p>Dengan Membaca kamu akan merasakan suasana masa lalu kemudian diantarkan pada masa depan</p>




              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('landing/assets/images/ilustrasi-reading.jpg')}}" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{{$slot}}

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p>© Dibuat Dengan <i class="fa fa-heart"></i> Copyright 2021

          <br>Design: <a rel="nofollow" href="#">RAF</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  @livewireScripts()
  <script src="{{asset('landing/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('landing/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('landing/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('landing/assets/js/animation.js')}}"></script>
  <script src="{{asset('landing/assets/js/imagesloaded.js')}}"></script>
  <script src="{{asset('landing/assets/js/templatemo-custom.js')}}"></script>

</body>
</html>
