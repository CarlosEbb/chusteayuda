<a href="/" class="mx-auto">
    <img src="{{asset('image/logo/logo.png')}}"   width="120"  class="img-fluid d-none d-md-block"  alt="{{env('APP_NAME')}}">
    <img src="{{asset('image/logo/logo-pequeno.png')}}"   width="55"  class="img-fluid d-md-none"  alt="{{env('APP_NAME')}}">
</a>
<hr>

<button class="nav-link btn btn-sm rounded text-start d-flex align-items-center px-1" id="v-pills-hacer-tab" data-bs-toggle="pill" data-bs-target="#v-pills-hacer" type="button" role="tab" aria-controls="v-pills-hacer" aria-selected="false">

  <svg class="me-0 me-md-2 me-lg-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M11.024 11.536L10 10l-2 3h9l-3.5-5z"/><circle cx="9.503" cy="7.497" r="1.503" fill="currentColor"/>
      <path fill="currentColor" d="M19 2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.806 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2zm0 14H5V5c0-.806.55-.988 1-1h13v12z"/>
  </svg>
  
  <span class="d-none d-md-block">Materiales</span>
</button>

<hr>
<div class="dropdown">
  <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
    <div class="text-wrap mx-sidebar d-none d-md-block text-capitalize text-break">
      {{Auth::user()->name}}
    </div>
    
  </a>
  <ul class="dropdown-menu text-small shadow">
    <li><a class="dropdown-item" href="#">Configuración</a></li>
    <li><a class="dropdown-item" href="#">Perfil</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="/logout">Cerrar sesión</a></li>
  </ul>
</div>