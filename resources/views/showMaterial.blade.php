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
    
    <div class="col-12">
      <embed src="{{$material->archivo}}" type="application/pdf" width="100%" height="600px" />
    </div>
  </div>

<br><br><br><br><br>
  

@endsection
