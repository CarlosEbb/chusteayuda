<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('includes.head')
<body>
  <div id="app">
    @include('includes.navbar')
    <main>
      @yield('content')
    </main>
  </div>

  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/dashboard.js')}}" type="module"></script>
  @yield('scriptJS')
</body>
</html>
