@extends('layouts.app')

@section('content')
@forelse($clientes as $cliente)
  <div class="container pt-3">
    <div class="row justify-content-center">
      <div class="col-12 col-md-12 col-lg-10">
        @include('includes.titlePage', array('title' => 'Códigos QR de los reportes'))
      </div>
      <div class="col-12 col-md-12 col-lg-10">
        <div class="row">
          @foreach(\App\Models\TipoReporte::all() as $tipo)
            <div class="col-12 col-md-3 col-lg-3 my-3">
              <a target="_blank" rel="noopener noreferrer" href="{{'/'.$cliente->id.'?tipo='.$tipo->id}}">
                <div class="card card-hover h-100 p-0 rounded-8">
                  <div class="img-top d-flex justify-content-center align-items-center p-2">
                    <img class="img-fluid" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge('image/logo/logo-pequeno.png', .2, true)->size(225)->margin(1)->generate(env('APP_URL').$cliente->id.'?tipo='.$tipo->id)) !!} ">
                  </div>
                  <div class="card-footer bg-transparent">
                    <p class="text-decoration-none">{{$tipo->nombre}}</p>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@empty
  @include('includes.mensajeSinResultado', array('urlImage' => 'image/search.svg', 'title' => 'No hay Códigos QR', 'showButton' => false, 'nameButton' => '', 'urlButton' => ''))
@endforelse
@endsection
