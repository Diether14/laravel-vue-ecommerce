<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" value="{{ csrf_token() }}"/>
   <title>Owner Portal</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
   <!-- Page Specific Styles -->
   @yield('styles')

   <link rel="icon" href="assets/img/thegoodmob-emblem.png">
</head>
<body>
   
   <div id="app">
      @include('store_owner.layout.header')
      @include('store_owner.layout.sidebar')
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

   @yield('modals')

   <!-- JavaScript files-->
   <script src="{{ asset('js/jquery.min.js') }}"></script>
   <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
   <script src="{{ asset('js/adminlte.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('js/front.js') }}"></script>
   <!-- Page Specific Scripts -->
   @yield('scripts')
   <script src="{{ asset('js/theme.js') }}" defer></script>
   <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>
</html>