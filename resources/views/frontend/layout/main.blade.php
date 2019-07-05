<!DOCTYPE HTML>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="StayFit encontra o melhor para você! Venha ter uma uma vida saudável. Encontre
  academias, studio de pilates, nutricionistas e lojas de suplementos perto de você.">
  <meta name="keywords" content="academia, academias baratas, academias perto de você, academia mais perto, academia perto de mim,
  encontre academias, quero academias, academia boa para malhar, academias do brasil, lojas de suplementos, lojas de suplementos perto de você,
  loja de suplemento mais perto, encontre lojas de suplementos,loja de suplementos do brasil, nutricionistas, nutricionistas baratos, nutricionista perto de você,
  nutricionista mais perto, encontre nutricionistas, nutricionistas do brasil, studio de pilates, studio de pilates baratos,
  studio de pilates perto de você, studio de pilates mais perto, encontre studio de pilates, studio de pilates do brasil">
  <meta name="StayFit" content="www.stayFit.com.br">
  <meta name="_token" content="{{ csrf_token() }}">

  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="rgba(0, 0, 0 , 0.8)">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="rgba(0, 0, 0 , 0.8)">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <title>StayFit | Encontre o melhor para você!</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.svg') }}">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">
  <script src="{{ asset('https://use.fontawesome.com/093cf048d1.js') }}"></script>

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Comfortaa') }}">

@yield('geocode')

<!-- GoogleAnalytics -->
  <script>
      (function (i, s, o, g, r, a, m) {
          i['GoogleAnalyticsObject'] = r;
          i[r] = i[r] || function () {
              (i[r].q = i[r].q || []).push(arguments)
          }, i[r].l = 1 * new Date();
          a = s.createElement(o),
              m = s.getElementsByTagName(o)[0];
          a.async = 1;
          a.src = g;
          m.parentNode.insertBefore(a, m)
      })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

      ga('create', 'UA-91017313-1', 'auto');
      ga('send', 'pageview');
  </script>
</head>

<body data-spy="scroll">

@yield('menu')

@yield('content')

@yield('footer')

@yield('map')

<!-- jQuery -->
<script src="{{ asset('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.1.11.1.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>

<!-- javascript -->
<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/SmoothScroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.isotope.js')  }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/modernizr.custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>
<script type="text/javascript">new WOW().init();</script>

@yield('script')

</body>
</html>
