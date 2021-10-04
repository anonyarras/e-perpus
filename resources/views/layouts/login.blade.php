<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

  <!-- ***** Header Area End ***** -->

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
