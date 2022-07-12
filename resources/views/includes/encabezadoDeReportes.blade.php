@php
  $dias = array("domingo","lunes","martes","miércoles","jueves","viernes","sábado");
  $pathImage = \App\Models\Cliente::find($_GET['cliente_id'])->logo
@endphp

<div class="d-flex justify-content-center align-items-center">
  @if ($pathImage)
    <img src="{{asset($pathImage)}}" class="me-3" width="54" alt="logo-cliente">
  @endif
</div>
<div>
  <p class="mb-1 fs-6 fs-md-5 text-primary">
    <strong>{{\App\Models\Cliente::find($_GET['cliente_id'])->user->name}}</strong>
  </p>
  <p class="mb-0"><small>{{$datosEncabezado['nombreReporte']}}</small></p>
  <p class="mb-0">
    <small>
      <strong>Fecha de informe:</strong> {{date('d/m/Y')}}
      @if ($datosEncabezado['diaDeLaSemana'])
        <br>  ● <strong>Día de la semana:</strong> {{$dias[date("w")]}}
      @endif
    </small>
  </p>
</div>
