<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" value="{{ csrf_token() }}"/>
   <title>Ecommerce Super Admin</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ asset('css/fa_all.min.css') }}">
   <!-- Ionicons -->
   <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
   <!-- Theme style -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
   <link rel="icon" href="assets/img/thegoodmob-emblem.png">
   <script src="vendor/jquery/jquery.min.js"></script>
</head>
<body>
   
   <div id="app">
      @include('admin.layout.header')
      @include('admin.layout.sidebar')
      <div class="content-wrapper">
         <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">{{$pageTitle}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                     @foreach ($breadcrumbs as $breadcrumb)
                         @if ($loop->last)
                           <li class="breadcrumb-item active">{{$breadcrumb['title']}}</li>
                         @else
                           <li class="breadcrumb-item"><a href="{{$breadcrumb['link']}}">{{$breadcrumb['title']}}</a></li>
                         @endif
                     @endforeach
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <section class="content">
             <div class="container-fluid">
                @yield('content')
             </div>
          </section>
      </div>
   </div>

   <!-- JavaScript files-->
   <script src="{{ asset('js/jquery.min.js') }}"></script>
   <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
   <script src="{{ asset('js/front.js') }}"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script>
   <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>
</html>