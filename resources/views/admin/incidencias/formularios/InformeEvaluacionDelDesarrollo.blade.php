@extends('layouts.reportes')

{{-- @section('content') --}}
@section('encabezado')
  @include('includes.encabezadoDeReportes', $datosEncabezado = array(
    'nombreReporte' => 'Evaluación del Desarrollo',
    'diaDeLaSemana' => true)
  )
@endsection

@section('numero-pasos')
  <span class="progress-item active-item">1</span>
  <span class="progress-item">2</span>
  <span class="progress-item">3</span>
  <span class="progress-item">4</span>
  <span class="progress-item">5</span>
  <span class="progress-item">6</span>
  <span class="progress-item">7</span>
  <span class="progress-item">8</span>
  <span class="progress-item">9</span>
  <span class="progress-item">10</span>
  <span class="progress-item">11</span>
  <span class="progress-item">12</span>
  <span class="progress-item">13</span>
  <span class="progress-item">14</span>
  <span class="progress-item">15</span>
@endsection

@section('includes-pasos')
  <input type="text" name="tipo_id" value="1" hidden>
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_1')
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_2')
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_3')
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_4')
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_5')
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_6')
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_7')
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_8')
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_9')
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_10')
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_11')
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_12')
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_13')
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_14')
  @include('admin.incidencias.formularios.pasos-evaluacion-del-desarrollo.paso_15')
@endsection


@section('JS')
  <script src="{{asset('js/InformeEvaluacionDelDesarrolo')}}"></script>
@endsection
