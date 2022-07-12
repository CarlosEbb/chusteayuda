<!DOCTYPE html>
<html lang="en">
  @include('includes.head')
  <body>
    @include('includes.navbarLogo')
    <div class="container">
      <div class="row">
        {{-- encabezado --}}
        <div class="col-12 col-md-10 col-lg-8 mt-md-4 offset-md-2 offset-lg-2 d-flex align-items-center">
          @yield('encabezado')
        </div>

        {!! Form::open(['route'=> ['incidencia.update', $reporte->id], 'method'=>'PUT','id' => 'form-incidencias', 'class'=>'d-flex justify-content-center align-items-center flex-column', 'files' => true, 'role' => 'form']) !!}
          <input type="text" id="cliente_id" name="cliente_id" hidden value="{{$_GET['cliente_id']}}">

          <div class="col-12 col-md-10 col-lg-8">
            <div class="alert alert-danger alert-dismissible align-items-center position-fixed top-0 start-50 translate-middle-x z-index-2 d-none mt-2" role="alert" id="alert-campos-requeridos">
                <span id="text-alert"></span>
            </div>
          </div>

          {{-- barra de progreso --}}
          <div class="col-12 col-md-10 col-lg-8 position-relative mt-3 mt-md-5 mb-3">
            <div class="progress-form">
              @yield('numero-pasos')
            </div>
            <div class="line-progress"></div>
          </div>

          {{-- pasos --}}
          <div class="col-12 col-md-10 col-lg-8">
            @yield('includes-pasos')
          </div>

          {{-- navegación --}}
          <div class="col-12 col-md-10 col-lg-8">
            <div class="form-navigation">
              <div class="row d-flex justify-content-between">
                <div class="col-6 text-start">
                  <button class="btn btn-back btn-outline-primary px-5 my-3 rounded-pill" type="button">atrás</button>
                </div>
                <div class="col-6 d-flex justify-content-end">
                  <button class="btn btn-next btn-primary px-5 my-3 rounded-pill" type="button">siguiente</button>
                  <button class="btn btn-save btn-primary px-5 my-3 rounded-pill d-none" id="btn-save" type="submit">guardar</button>
                </div>
              </div>
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/formularioPasoPaso.js') }}"></script>
    @yield('JS')
  </body>
</html>
