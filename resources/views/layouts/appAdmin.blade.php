<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Styles --> 
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style-landing.css') }}" rel="stylesheet">
  {{-- Styles Sidebars --}}
  <link href="{{asset('css/style-sidebars.css')}}" rel="stylesheet">
  <link href="{{asset('css/sidebars.css')}}" rel="stylesheet">
  {{-- link icons --}}
  <link rel="shortcut icon" href="{{asset('/image/logo/logo-pequeno.png')}}" type="image/x-icon">
  <title>{{env('APP_NAME')}}</title>

  @yield('head')
</head>
<body>

  <div class="d-flex align-items-start">
    <div class="nav flex-column p-3 sidebar-gestion-cliente" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      @include('includes.sidebar')
    </div>
    <div class="b-example-divider b-example-vr"></div>
    <div class="container m-5">
      @yield("content")
    </div>
  </div>

  <a href="https://api.whatsapp.com/send?phone=51931145727" class="float p-1" target="_blank">
    <img src="{{asset('/image/icon/whatsapp.svg')}}" style="width: 34px;">
  </a>

  

  <script src="{{asset("/js/bootstrap.bundle.min.js")}}"></script>
  @if(\Route::currentRouteName() == 'landing')
    {{-- Escritura automatica en landing --}}
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  @endif
  @yield('js')
</body>
</html>
