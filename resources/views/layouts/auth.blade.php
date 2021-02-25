<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('landingpage/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('landingpage/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('landingpage/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('landingpage/css/style.css')}}">

    <title>Fun Bahasa #BahasaAdalahKita</title>
    <link rel="shortcut icon" href="{{ asset('landingpage/img/funbahasa.png')}}" type="image/x-icon">
  </head>
  <body>
        @yield('content')
    <script src="{{ asset('landingpage/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('landingpage/js/popper.min.js')}}"></script>
    <script src="{{ asset('landingpage/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('landingpage/js/main.js')}}"></script>
  </body>
</html>