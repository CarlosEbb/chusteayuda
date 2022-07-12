<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>
  @include('includes.navbar')
  <main>
    <div class="container pt-3">
      <div class="row justify-content-center">
        <div class="col-12 col-md-12 col-lg-10 d-flex justify-content-between">
          @yield('titulo')
          <div class="d-flex align-items-center">
            @if ($linkPdf)
              <a href="/reportePDF/{{$reporte->id}}" target="_blank" class="btn btn-outline-primary rounded-pill px-3 d-print-none">ver pdf</a>
            @endif
            {{-- @if ($linkEditar)
              <a href="/reporteEditar/{{$reporte->id}}?cliente_id={{$cliente_id}}" target="_blank" class="btn btn-outline-primary rounded-pill px-3 d-print-none">editar reporte</a>
            @endif --}}
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-10">
          <div class="card m-0 card-registrar-clientes p-3 overflow-y" style="height: 816px">
            <div class="row d-flex justify-content-center">
              <div class="col-12 mt-3 mb-5 d-flex">
                @yield('cabecera')
              </div>
              @yield('respuestas')
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/dashboard.js')}}" type="module"></script>
  @yield('JS')
</body>

</html>
