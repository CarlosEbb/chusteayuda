<!DOCTYPE html>
<html lang="es">

<head>
  @include("layouts.headAll")

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->

  <link id="pagestyle" href="/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
</head>


<body class="g-sidenav-show  bg-gray-100">
  
  @include("admin.sideAdmin")

  <main class="main-content border-radius-lg ">
   
    <div class="container-fluid py-4">
      @include("includes.errorMessage")
      @yield('content')

     @include("admin.footerAdmin")

    </div>


  </main>

  <div class="fixed-plugin d-xl-none d-flex">
    <a href="javascript:;" class="fixed-plugin-button text-dark position-fixed px-3 py-2" id="iconNavbarSidenav">
      <i class="material-icons py-2">dashboard</i>
    </a>
    
  </div>

  <!--   Core JS Files   -->
  <script src="/js/core/popper.min.js"></script>
  <script src="/js/core/bootstrap.min.js"></script>
  <script src="/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/js/plugins/smooth-scrollbar.min.js"></script>


  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>