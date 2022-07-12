<nav class="navbar navbar-expand-lg navbar-light bg-light w-100 shadow-sm sticky-top" style="z-index: 2"  @if(Route::currentRouteName() == 'login' || Route::currentRouteName() == 'password.request' || Route::currentRouteName() == 'password.reset') hidden @endif>
  <div class="container-fluid d-flex ">
    <a class="navbar-brand" href="/">
      <img src="{{asset('image/logo/logo-pequeno.png')}}" width="50" class="p-2" title="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      @guest
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="#services">Servicios</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="#nosotros">Nosotros</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="#contacto">Contacto</a>
          </li>

          <li class="nav-item">
            <a class="nav-link btn btn-primary text-white rounded-pill px-3" href="/login">Iniciar sesión</a>
          </li>
        </ul>
      @else
        <ul class="navbar-nav">

        @if(Auth::user()->rol_id == 1)
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="{{route('cliente.create')}}">Registrar Centros</a>
          </li>
        @endif

        @if(Auth::user()->rol_id == 1)
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="/home">Consultar Centros</a>
          </li>
        @endif


        @if((isset($cliente) and Auth::user()->rol_id == 1) or (isset($cliente) and Auth::user()->rol_id == 2))

          <li class="nav-item mx-2  d-block d-md-block d-lg-none d-xl-none">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="/trabajadores/{{$cliente->id}}">Profesionales</a>
          </li>

        @endif



        @if((Auth::user()->rol_id == 2))
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="{{route('incidencia.show', Auth::user()->cliente->id)}}">Informes</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="/perfil/{{Auth::user()->cliente->id}}">Perfil</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="/">Inicio</a>
          </li>
        @endif
        @if((Auth::user()->rol_id == 2) and (Route::currentRouteName() == 'perfil'))
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="/#services">Servicios</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="/#nosotros">Nosotros</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="/#planes">Planes</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="/#contacto">Contacto</a>
          </li>
        @endif
        @if((Auth::user()->rol_id == 4))
          <li class="nav-item">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="/cliente/{{Auth::user()->cliente->id}}">{{ __('Datos') }}</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="/perfil/{{Auth::user()->cliente->id}}">Perfil</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="{{route('incidencia.show', Auth::user()->cliente->id)}}">Informes</a>
          </li>
          <li class="nav-item mx-2 d-block d-md-none">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="/trabajadores/{{$cliente->id}}">Profesionales</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="/">Inicio</a>
          </li>
        @endif
          <li class="nav-item">
            <a class="nav-link text-bold text-black rounded-pill ps-2 ps-md-2" href="{{ route('logout') }}">{{ __('Cerrar sesion') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
          </li>
        </ul>
      @endguest
    </div>
  </div>
</nav>
