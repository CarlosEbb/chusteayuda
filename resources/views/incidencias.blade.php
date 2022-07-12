@extends('layouts.app')

@section('content')

<div class="container pt-3">
  <div class="row justify-content-center">
    <div class="col-12 col-md-12 col-lg-10">
      @include('includes.messageError')
      <div class="row">
        <div class="col-12 d-flex justify-content-between">
          @include('includes.titlePage', array('title' => 'Consultar Informes'))

          <div class="d-flex align-items-center">
            @if(Auth::user()->rol_id == 1)
              <a href="/consultar-qr/{{$id}}" class="btn btn-outline-primary rounded-pill px-3" target="_blank">Ver QR</a>
            @endif
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-10 mt-3" id="filter">
      @foreach(\App\Models\TipoReporte::all()->except($excepto) as $tipo)
        <a class="btn btn-outline-secondary btn-sm rounded-pill mb-1" href="/incidencia/{{$id}}?filtro={{$tipo->id}}"><small>{{$tipo->nombre}}</small></a>
      @endforeach
    </div>
    <div class="col-12 col-md-12 col-lg-10">
    <form action="/buquedaIncidencias" method="POST" hidden>
      @csrf
      <select name="tipo">
        <option disabled>seleccione</option>
        <option value="nombre">nombre</option>
        <option value="cedula">cedula</option>
      </select>
      <input type="text" name="busqueda">
      <input type="text" name="cliente_id" value="{{$id}}" hidden>
      <input type="submit">
    </form>
      @forelse($incidencias as $reporte)
        @include('admin.incidencias.listarIncidencias', $reporte)
      @empty
        @include('includes.mensajeSinResultado', array('urlImage' => 'image/search.svg', 'title' => 'No hay informes creados de este tipo', 'showButton' => false, 'nameButton' => '', 'urlButton' => ''))
      @endforelse
    </div>
  </div>
</div>
@endsection
@section('scriptJS')
<script>
  const linkFilter = document.querySelectorAll('#filter a')
      for (const links of linkFilter) {
        if (window.location.href === links.href) {
          links.classList.add('btn-outline-primary')
          links.classList.remove('btn-outline-secondary')
        }
      }
</script>
@endsection
