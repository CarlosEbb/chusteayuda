@extends('layouts.app')
@section('css')
  <style>
     /* Estilos personalizados si es necesario */
    #current-image {
      transition: transform 0.3s; /* Transición suave para el zoom */
      border-radius: 10px; /* Redondear las esquinas */
    }

    #current-image:hover {
      transform: scale(1.05); /* Efecto de zoom al pasar el mouse */
    }

    .secundaria:hover {
      transform: scale(1.2); /* Efecto de zoom al pasar el mouse */
    }

    .secundaria {
      transition: transform 0.3s; /* Transición suave para el zoom */
      cursor: pointer; /* Cambia el cursor a una mano */
      border-radius: 10px; /* Redondear las esquinas */
    }

  </style>
  
@endsection


@section('content')
  <div class="container">
    <div class="row">
        <div class="col-12">
          <h2 class="text-center">{{$material->nombre}}</h2> <br>
        </div>
        <div class="col-12 col-md-6">
          <img id="current-image" class="card-img-top" src="{{$material->images->first()->ruta ?? '/images/no_imagen.jpg'}}" alt="Card image cap"><br><br>
          <div class="row">
            @foreach($material->images as $key => $value)
              <div class="col-2">
                <img class="secundaria card-img-top" src="{{$value->ruta ?? '/images/no_imagen.jpg'}}" alt="Card image cap"><br><br>
              </div>
            @endforeach
            
          </div>
        </div>
        <div class="col-12 col-md-6 col-6">
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
        <a href="https://api.whatsapp.com/send?phone=51931145727&text={{$mensaje_para_url}}" download="{{$material->nombre}}" class="btn btn-lg btn-block btn-success">Comprar a S/{{$material->precio}}</a>
      </div>

      <br><br><br>

      <div class="col-12 d-none d-md-block">
        <embed src="{{$material->archivo}}" type="application/pdf" width="100%" height="600px" />
      </div>
    @endif
  </div>

<br><br><br><br><br>
  

@endsection

@section('js')
   <script>
    document.addEventListener('DOMContentLoaded', function() {
      const currentImage = document.getElementById('current-image');
      const secundarias = document.querySelectorAll('.secundaria');

      secundarias.forEach((imagen) => {
        imagen.addEventListener('click', function() {
          currentImage.src = this.src;
        });
      });
    });
  </script>
  
@endsection