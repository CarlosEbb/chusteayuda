@extends('layouts.app')

@section('content')
<div class="container pt-3">
  <div class="row justify-content-center">
    <div class="col-12 col-md-12 col-lg-10 my-3">
      @include('includes.cardInfoApp')
    </div>
    <div class="col-12 col-md-12 col-lg-10">
      @include('includes.messageError')
      @include('includes.titlePage', array('title' => 'Consultar centros'))
    </div>
    <div class="col-12 col-md-12 col-lg-10">
      @forelse(\App\Models\Cliente::all() as $cliente)
        @include('admin.clientes.listarClientes', $cliente)
      @empty
        @include('includes.mensajeSinResultado', array('urlImage' => 'image/web.svg', 'title' => 'Sin resultado crea un cliente nuevo.', 'showButton' => true, 'nameButton' => 'Crea un cliente nuevo', 'urlButton' => 'cliente/create'))
      @endforelse
    </div>
  </div>
</div>
@endsection
