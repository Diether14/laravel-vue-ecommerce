<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" value="{{ csrf_token() }}"/>
   <title>The Good Mob</title>
   {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> --}}

   {{-- <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/> --}}
   <!-- Bootstrap CSS-->
   <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
   <!-- Lightbox-->
   <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
   <!-- Range slider-->
   <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
   <!-- Bootstrap select-->
   <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
   <!-- Owl Carousel-->
   <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.theme.default.css">
   <!-- Google fonts-->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
   <!-- theme stylesheet-->
   <link rel="stylesheet" href="css/style.blue.min.css" id="theme-stylesheet">
   <!-- Custom stylesheet - for your changes-->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Favicon-->
   <link rel="icon" href="assets/img/thegoodmob-emblem.png">
   <script src="vendor/jquery/jquery.min.js"></script>
</head>
<body>
   <header class="header bg-white sticky-top shadow-sm">
      <div class="bg-dark p-1 d-flex justify-content-center">
        <span class="badge badge-primary" style="font-size: 68%;">Flash sale on February 14!</span>
      </div>
      <div class="container px-0 px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">
          <a href="index.php">
            <img src="assets/img/thegoodmob.png" class="logo" alt="The Good Mob">
          </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">               
              <li class="nav-item"><a class="nav-link" href="cart.php"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i><small class="text-gray">(2)</small></a></li>
              <li class="nav-item"><a class="nav-link" href="#"> <i class="far fa-heart mr-1"></i><small class="text-gray"> (0)</small></a></li>
              <li class="nav-item"><a class="nav-link" href="#"> <i class="mr-1 text-gray"></i>Login</a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link disabled" href="#"> <i class="mr-1 text-gray"></i>|</a></li>
              <li class="nav-item"><a class="nav-link" href="#"> <i class="mr-1 text-gray"></i>Signup</a></li>
            </ul>
          </div>
        </nav>
      </div>
   </header>

   <div id="app">
      @yield('content');
   </div>

   <footer class="bg-dark text-white">
      <div class="container py-4">
        <div class="row py-5">
          <div class="col-md-4 mb-3 mb-md-0">
            <h6 class="text-uppercase mb-3">Customer services</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="#">Help &amp; Contact Us</a></li>
              <li><a class="footer-link" href="#">Returns &amp; Refunds</a></li>
              <li><a class="footer-link" href="#">Online Stores</a></li>
              <li><a class="footer-link" href="#">Terms &amp; Conditions</a></li>
            </ul>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <h6 class="text-uppercase mb-3">Company</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="#">What We Do</a></li>
              <li><a class="footer-link" href="#">Available Services</a></li>
              <li><a class="footer-link" href="#">Latest Posts</a></li>
              <li><a class="footer-link" href="#">FAQs</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h6 class="text-uppercase mb-3">Social media</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="https://www.facebook.com/The-Good-Mob-PH-104186281683024/" target="_blank">Facebook</a></li>
              <li><a class="footer-link" href="https://www.instagram.com/thegoodmobmovement.ph/" target="_blank">Instagram</a></li>
              <!-- <li><a class="footer-link" href="https://www.instagram.com/thegoodmobmovement.ph/" target="_blank">Twitter</a></li> -->
            </ul>
          </div>
        </div>
        <div class="border-top pt-4" style="border-color: #1d1d1d !important">
          <div class="row">
            <div class="col-lg-6">
              <p class="small text-muted mb-0">&copy; 2020 All rights reserved.</p>
            </div>
            <div class="col-lg-6 text-lg-right">
              <p class="small text-muted mb-0">Designed and Developed by <span class="text-white reset-anchor">The Good Mob Movement</span></p>
            </div>
          </div>
        </div>
      </div>
   </footer>
   
   {{-- <script src="{{ mix('js/app.js') }}" type="text/javascript"></script> --}}
   <!-- JavaScript files-->
   <script>
      const url = window.location.href;
      const newURL = url.split('/');
  
      if(newURL[newURL.length - 1].includes('products')) {
        $('.nav-link').removeClass('active');
        $('.nav-link[href="products.php"').addClass('active');
      }
  
      if(newURL[newURL.length - 1].includes('index') || newURL[newURL.length - 1] === '') {
        $('.nav-link').removeClass('active');
        $('.nav-link[href="index.php"').addClass('active');
      }
  
      if(newURL[newURL.length - 1].includes('cart')) {
        $('.nav-link').removeClass('active');
        $('.nav-link[href="cart.php"').addClass('active');
      }
   </script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="vendor/lightbox2/js/lightbox.min.js"></script>
   <script src="vendor/nouislider/nouislider.min.js"></script>
   <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
   <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
   <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
   <script src="js/front.js"></script>
   <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>
</html>