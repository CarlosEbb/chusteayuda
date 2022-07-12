@extends('layouts.app')

@section('content')
  <div class="container-fluid mt-2 pt-2">
    {{-- menu de fases --}}
    @include('includes.menuFases')

    <div class="row ms-md-4 d-flex justify-content-end">
      <div class="col-12 col-md-12 col-lg-8 col-xl-6 pe-md-5 ps-md-0">
        @yield('content-perfil')
      </div>

      {{-- datos del perfil de la empresa --}}
      <div class="d-none d-md-none d-lg-none d-xl-block col-xl-3 p-2">
        @include('includes.cardDatosPerfil')
      </div>
    </div>
    {{-- menu para movil --}}
    @include('includes.menuFasesMovil')
  </div>
@endsection
