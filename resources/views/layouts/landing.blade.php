<!DOCTYPE html>
<html lang="en">
  @include('includes.head')
<body>
  {{-- @include('includes.navbar') --}}
    @yield('landing')
  {{-- @include('includes.footer') --}}

  <!-- Scripts -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{asset('js/scrollreveal.js')}}"></script>
  <script src="{{ asset('js/index.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
  <script src="{{ asset('js/main.js') }}"></script>
    @yield('js')
</body>
</html>