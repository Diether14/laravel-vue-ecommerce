<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" value="{{ csrf_token() }}"/>
   <title>The Good Mob</title>
   <!-- Bootstrap CSS-->
   <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
   <!-- Lightbox-->
   <link rel="stylesheet" href="{{asset('vendor/lightbox2/css/lightbox.min.css')}}">
   <!-- Range slider-->
   <link rel="stylesheet" href="{{asset('vendor/nouislider/nouislider.min.css')}}">
   <!-- Bootstrap select-->
   <link rel="stylesheet" href="{{asset('vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
   <!-- Owl Carousel-->
   <link rel="stylesheet" href="{{asset('vendor/owl.carousel2/assets/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('vendor/owl.carousel2/assets/owl.theme.default.css')}}">
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

   <div id="app">
      @yield('content')
   </div>

   <!-- JavaScript files-->
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="vendor/lightbox2/js/lightbox.min.js"></script>
   <script src="vendor/nouislider/nouislider.min.js"></script>
   <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
   <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
   <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
   <script src="js/front.js"></script>
   <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

   <link rel="stylesheet" href="/library/dropzone/basic.min.css">
   <link rel="stylesheet" href="/library/dropzone/dropzone.min.css">
   <script src="/library/dropzone/dropzone.min.js"></script>
   <script src="/library/dropzone/dropzone-amd-module.min.js"></script>

   <link rel="stylesheet" href="/library/dropzone/basic.css">
   <link rel="stylesheet" href="/library/dropzone/dropzone.css">
   <script src="/library/dropzone/dropzone.js"></script>
   <script src="/library/dropzone/dropzone-amd-module.js"></script>
</body>
</html>
