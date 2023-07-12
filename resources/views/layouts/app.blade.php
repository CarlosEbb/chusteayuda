<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ChusTEAyuda</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/page/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/page/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/page/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>
<body>
  @if(Route::currentRouteName() != 'landing' and Route::currentRouteName() != 'login')
    <!-- header section strats -->
    <div class="top_container sub_pages">
      @include('includes.navbar')
    </div>
    <!-- end header section -->
  @endif

  @yield('content')

  <a href="https://api.whatsapp.com/send?phone=51931145727" class="float p-1" target="_blank">
    <img src="{{asset('/image/icon/whatsapp.svg')}}" style="width: 34px;">
  </a>

  

  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2023 Todos los derechos reservados
      <a href="https://teamdigital.dev/">Team Digital</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/page/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/page/bootstrap.js"></script>
</body>
</html>