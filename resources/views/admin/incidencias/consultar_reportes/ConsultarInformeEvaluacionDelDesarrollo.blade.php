@extends('layouts.consultarReportes', ['linkPdf' => false])

@section('titulo')
  @include('includes.messageError')
  @include('includes.titlePage', array('title' => 'Reporte de acto Condición Insegura'))
@endsection

@section('cabecera')
  @include('includes.encabezadoConsultarReportes', $datosEncabezado = array(
      'correoTrabajador' => false,
      'correoEmpresa' => true,
      'cedulaCargo' => false
    )
  )
@endsection

@section('respuestas')
 Aqui va la info
@endsection
