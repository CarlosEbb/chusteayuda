<nav class="navbar navbar-expand-lg navbar-light bg-light w-100  sticky-top shadow-sm" style="z-index: 2"  @if(Route::currentRouteName() == 'login' || Route::currentRouteName() == 'password.request' || Route::currentRouteName() == 'password.reset') hidden @endif>
    <div class="container d-flex justify-content-center ">
      <a class="navbar-brand" href="/">
        <img src="{{asset('image/logo/Logo-1.png')}}" width="200" class="p-2">
      </a>
    </div>
</nav>