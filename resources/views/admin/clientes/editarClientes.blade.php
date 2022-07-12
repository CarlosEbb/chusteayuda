@extends('layouts.app')
@section('content')
<div class="container-md container-xxl pt-2">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            @include('includes.messageError')
            <div class="alert alert-danger d-none align-items-center position-fixed top-0 start-50 translate-middle-x z-index-2 mt-3" role="alert" id="alert-validate"></div>
            @include('includes.titlePage',  array('title' => 'Editar Centro'))
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
          <div class="card m-0 card-registrar-clientes  px-1 px-md-5">
            <h2 class="my-3 p-2 border-bottom border-1">Datos del Centro o Clínica</h2>
            {!! Form::model($cliente, ['route' => ['cliente.update', $cliente->id], 'method' => 'PUT', 'class'=>'tab-content row', 'id'=>'pills-tabContent', 'files' => true, 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
              <input type="text" name="cliente_id" id="cliente_id" hidden value="{{$cliente->id}}" >
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="content-form-scroll">
                  @include('admin.clientes.formRegistrosClientes.datosClientes')
                </div>
              </div>
             
              <div class="card-footer border-0 bg-transparent border-top border-1" >
                <div class="row d-flex align-items-center my-2">
                  <div class="col-12 col-md-6 col-lg-6 text-start">

                  </div>
                  <div class="col-6 col-md-3 col-lg-3">
                  
                  </div>
                  <div class="col-6 col-md-3 col-lg-3">
                  <button type="submit" class="btn btn-primary rounded-pill" id="btn-register">Actualizar Centro</button>
                  </div>
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
    </div>
</div>

@endsection

@section('scriptJS')
  <script>
    var APP_URL = '{{ env('APP_URL') }}';
    var APP_DEBUG = '{{ env('APP_DEBUG') }}';
  </script>
  <script src="{{asset('js/cargos.js')}}" type="module"></script>
  <script src="{{asset('js/zonaLugar.js')}}" type="module"></script>
  <script src="{{asset('js/procesos.js')}}" type="module"></script>
  <script src="{{asset('js/formularioClientes.js')}}"></script>
@endsection
