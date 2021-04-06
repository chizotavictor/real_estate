<!doctype html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Real Estate Html Template">
      <meta name="author" content="">
      <meta name="generator" content="Jekyll v4.1.1">
      <title>Virgo Mansions - Welcome to Virgo Mansions - Best Property Resellers & Rentals</title>
      <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&amp;family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('web/vendors/fontawesome-pro-5/css/all.css')}}">
      <link rel="stylesheet" href="{{ asset('web/vendors/bootstrap-select/css/bootstrap-select.min.css')}}">
      <link rel="stylesheet" href="{{ asset('web/vendors/slick/slick.min.css')}}">
      <link rel="stylesheet" href="{{ asset('web/vendors/magnific-popup/magnific-popup.min.css')}}">
      <link rel="stylesheet" href="{{ asset('web/vendors/jquery-ui/jquery-ui.min.css')}}">
      <link rel="stylesheet" href="{{ asset('web/vendors/chartjs/Chart.min.css')}}">
      <link rel="stylesheet" href="{{ asset('web/vendors/dropzone/css/dropzone.min.css')}}">
      <link rel="stylesheet" href="{{ asset('web/vendors/animate.css')}}">
      <link rel="stylesheet" href="{{ asset('web/vendors/timepicker/bootstrap-timepicker.min.css')}}">
      <link rel="stylesheet" href="{{ asset('web/vendors/mapbox-gl/mapbox-gl.min.css')}}">
      <link rel="stylesheet" href="{{ asset('web/css/themes.css')}}">
      <link rel="icon" href="images/favicon.ico">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:site" content="@">
      <meta name="twitter:creator" content="@">
      <meta name="twitter:title" content="Home 03">
      <meta name="twitter:description" content="Real Estate Showcase">
      <meta name="twitter:image" content="images/homeid-social-logo.png">
      <meta property="og:url" content="home-03.html">
      <meta property="og:title" content="Home 03">
      <meta property="og:description" content="Real Estate Html Showcase">
      <meta property="og:type" content="website">
      <meta property="og:image" content="images/homeid-social.png">
      <meta property="og:image:type" content="image/png">
      <meta property="og:image:width" content="1200">
      <meta property="og:image:height" content="630">
   </head>
   <body>
    <header class="main-header navbar-light header-sticky header-sticky-smart header-mobile-lg">
        <div class="sticky-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg px-0">
                <a class="navbar-brand" href="{{route('welcome')}}">
                    <img src="{{asset('logo.png')}}" alt="" class="normal-logo">
                    <img src="{{asset('logo.png')}}" alt="" style="height: 50px;" class="sticky-logo">
                </a>
                <div class="d-flex d-lg-none ml-auto">
                    
                    <button class="navbar-toggler border-0 px-0" type="button" data-toggle="collapse" data-target="#primaryMenu01" aria-controls="primaryMenu01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-white fs-24"><i class="fal fa-bars"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse mt-3 mt-lg-0 mx-auto flex-grow-0" id="primaryMenu01">
                    <ul class="navbar-nav hover-menu main-menu px-0 mx-lg-n4">
                        <li id="navbar-item-home" aria-haspopup="true" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                            <a class="nav-link  p-0" href="{{route('buy')}}" >
                            Buy
                            </a>
                        </li>
                        <li id="navbar-item-home" aria-haspopup="true" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                            <a class="nav-link  p-0" href="{{route('rent')}}" >
                            Rent
                            </a>
                        </li>
                        <li id="navbar-item-home" aria-haspopup="true" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                            <a class="nav-link  p-0" href="{{ route('property.add') }}" >
                            Sell
                            </a>
                        </li>
                    </ul>
                    <div class="d-block d-lg-none">
                    <ul class="navbar-nav flex-row justify-content-lg-end d-flex flex-wrap py-2">
                    
                        <li class="nav-item">
                            @if(Auth::check())
                            <a class="nav-link px-2" href="{{ route('home') }}">DASHBOARD</a>
                         @else
                            <a class="nav-link px-2" href="{{ route('login') }}">SIGN IN</a>
                         @endif
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="d-none d-lg-block">
                    <ul class="navbar-nav flex-row justify-content-lg-end d-flex flex-wrap text-body py-2">
                    <li class="nav-item">
                        @if(Auth::check())
                            <a class="nav-link px-2" href="{{ route('home') }}">DASHBOARD</a>
                         @else
                            <a class="nav-link px-2" href="{{ route('login') }}">SIGN IN</a>
                         @endif
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
        </div>
    </header>
    @yield('contents')
    <script src="{{ asset('web/vendors/jquery.min.js')}}"></script>
    <script src="{{ asset('web/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('web/vendors/bootstrap/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('web/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('web/vendors/slick/slick.min.js')}}"></script>
    <script src="{{ asset('web/vendors/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('web/vendors/counter/countUp.js')}}"></script>
    <script src="{{ asset('web/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('web/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{ asset('web/vendors/dropzone/js/dropzone.min.js')}}"></script>
    <script src="{{ asset('web/vendors/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{ asset('web/vendors/hc-sticky/hc-sticky.min.js')}}"></script>
    <script src="{{ asset('web/vendors/jparallax/TweenMax.min.js')}}"></script>
    <script src="{{ asset('web/vendors/mapbox-gl/mapbox-gl.js')}}"></script>
    <script src="{{ asset('web/js/theme.js')}}"></script>
    
   </body>
</html>