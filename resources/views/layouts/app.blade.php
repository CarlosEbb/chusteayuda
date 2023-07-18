<!DOCTYPE html>
<html lang="es">
<head>
  @include("layouts.headAll")
 
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="/css/page/bootstrap.css" />
  
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="/css/page/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/css/page/responsive.css" rel="stylesheet" />

</head>
@include("layouts.headGoogle")
<body>
  @if(Route::currentRouteName() != 'landing' and Route::currentRouteName() != 'login')
    <!-- header section strats -->
    <div class="top_container_dos sub_pages">
      @include('includes.navbar')
    </div>
    <!-- end header section -->
  @endif

  @yield('content')

  <a href="https://api.whatsapp.com/send?phone=51931145727" class="float p-1" target="_blank">
    <img src="{{asset('/images/icon/whatsapp.svg')}}" style="width: 34px;">
  </a>

  <a href="https://www.instagram.com/chusteayuda" class="float_dos p-1" target="_blank">
    <img src="{{asset('/images/icon/instagram.png')}}" style="width: 34px;">
  </a>
  

  

  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2023 Todos los derechos reservados
      <a href="https://teamdigital.dev/">Team Digital</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="/js/code.jquery.com_jquery-3.7.0.min.js"></script>
  <!-- <script type="text/javascript" src="/js/page/jquery-3.4.1.min.js"></script> -->
  <script type="text/javascript" src="/js/page/bootstrap.js"></script>
  <script type="text/javascript" src="/js/page/bootstrap.js"></script>
   @yield('js')
</body>
</html>