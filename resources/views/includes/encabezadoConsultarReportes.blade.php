@php
  $pathImage = $reporte->cliente->logo
@endphp

@if ($pathImage)
  <div class="d-flex align-items-center">
    <img src="{{asset($pathImage)}}" width="75" alt="logo cliente">
  </div>
@endif
<div class="header-reporte mx-3">
  <p class="mb-0 fs-5">{{$reporte->nombre_empleado}}</p>
  <p class="mb-0">
    <small>
      <strong>Fecha y Hora diligenciamiento:</strong>
      {{$reporte->created_at->format('d/m/Y') }} - {{ $reporte->created_at->format('H:i') }}
    </small>
  </p>

  <p class="mb-0">
    @if ($cedulaCargo)
      <small><strong>Cedula:</strong>{{$reporte->documento_empleado}}</small> /
      <small><strong>Cargo:</strong>{{$reporte->cargo}} </small> /
    @endif

    @if ($correoEmpresa)
      <strong>Correo:</strong> {{$reporte->correo}}</small>
    @endif

    @if ($correoTrabajador)
      <strong>Correo:</strong>@if(\App\Models\Trabajador::where('cedula', $reporte->documento_empleado)->first() != null) {{\App\Models\Trabajador::where('cedula', $reporte->documento_empleado)->first()->user->email }} @endif</small>
    @endif
  </p>
</div>
