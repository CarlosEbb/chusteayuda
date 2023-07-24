@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col-12">
          <h2 class="text-center">{{$material->nombre}}</h2> <br>
        </div>
        <div class="col-6">
          <img class="card-img-top" src="{{$material->imagen}}" alt="Card image cap">
        </div>
        <div class="col-6">
          <p class="text-justify"><?php echo $material->descripcion?></p>
        </div>
    </div>
    <br><br><br>
    
    @if($material->tipo == 0)
      <div class="col-12 d-none d-md-block">
        <embed src="{{$material->archivo}}" type="application/pdf" width="100%" height="600px" />
      </div>
      <div class="col-12 d-block d-md-none">
        <a href="{{$material->archivo}}" download="{{$material->nombre}}" class="btn btn-lg btn-block btn-success">Descargar</a>
      </div>
    @else
      <div class="col-12">
        @php
          $text = "Hola, estoy interesad@ en comprar: ".$material->nombre;
          $mensaje_para_url = urlencode($text);
        @endphp
        <a href="https://api.whatsapp.com/send?phone=51931145727&text={{$mensaje_para_url}}" download="{{$material->nombre}}" class="btn btn-lg btn-block btn-success">Comprar</a>
      </div>
      <div class="col-12 d-none d-md-block">
        <embed src="{{$material->archivo}}" type="application/pdf" width="100%" height="600px" />
      </div>
    @endif
  </div>

<br><br><br><br><br>
  

@endsection
