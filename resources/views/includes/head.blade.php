<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{env('APP_NAME')}}</title>

  {{-- link icons --}}
  <link rel="shortcut icon" href="{{asset('/image/logo/logo-pequeno.png')}}" type="image/x-icon">

  <!-- Styles -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  {{-- condicional --}}
  <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}"> --}}
  @yield('head')

  <link href="{{ asset('css/stylesLanding.css') }}" rel="stylesheet">

     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
