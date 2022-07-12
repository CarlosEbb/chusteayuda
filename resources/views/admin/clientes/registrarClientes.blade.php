@extends('layouts.app')
@section('content')

<div class="container pt-2">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
      @include('includes.messageError')
      <div class="alert alert-danger d-none align-items-center position-fixed top-0 start-50 translate-middle-x z-index-2 mt-3" role="alert" id="alert-validate"></div>
      @include('includes.titlePage', array('title' => 'Registrar Centro'))
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
      <div class="card m-0 card-registrar-clientes px-1 px-md-5">
      <h2 class="my-3 p-2 border-bottom border-1">Datos del Centro o Clínica</h2>
        {!! Form::open(['route'=>'cliente.store', 'method'=>'POST', 'class'=>'tab-content row', 'id'=>'pills-tabContent', 'files' => true, 'role' => 'form']) !!}
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="row g-3 content-form-scroll p-1 pb-5 pb-5">          
            @include('admin.clientes.formRegistrosClientes.datosClientes')
          </div>
        </div>
        
        <div class="card-footer border-0 bg-transparent border-top border-1">
          <div class="row d-flex align-items-center my-2">
            <div class="col-12 col-md-6 col-lg-6 text-start mb-2">
              
            </div>
            <div class="col-6 col-md-3 col-lg-3">
              
            </div>
            <div class="col-6 col-md-3 col-lg-3">
              <button type="submit" class="btn btn-primary rounded-pill" id="btn-register">Registrar Centro</button>
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
  <script src="{{asset('js/formularioClientes.js')}}"></script>
@endsection
