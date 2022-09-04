@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 mt-5 mx-auto position-relative card-P">
        <div class="f">
          <div class="fondo-1 opacity-25">
            <img class="opacity-75 pe-none img-fluid" src="{{asset("/image/Vector.png")}}" alt="">
          </div>
          <div class="fondo-2 opacity-25">
            <img class="opacity-75 pe-none img-fluid" src="{{asset("/image/Vector-1.png")}}" alt="">
          </div>
        </div>
        <div class="card border-0 shadow rounded-5 position-absolute top-0 my-4">
          <div class="card-header bg-transparent border-0 text-center">
            <img class="img-fluid my-4" src="{{asset('/image/logo/logo.png')}}" alt="" width="150">
          </div>
          
          <div class="card-footer w-75 mx-auto border-0 bg-transparent">
            <div class="d-flex justify-content-evenly flex-wrap my-4">
              <a href="https://www.instagram.com/chusteayuda/"><img src="{{asset('/image/icon/instagram.png')}}" style="width: 34px;"></a>
              <a href="https://www.youtube.com/channel/UCnaDdea-B4c7a_Lo1VB2mAg/featured"><img src="{{asset('/image/icon/youtube.png')}}" style="width: 34px;"></a>
              <a href="https://www.facebook.com/Chusteayuda-102777539173198"><img src="{{asset('/image/icon/facebook.png')}}" style="width: 34px;"></a>
              <a href="https://www.tiktok.com/@chusteayuda"><img src="{{asset('/image/icon/tiktok.png')}}" style="width: 34px;"></a>
            </div>
          </div>

        <h3 class="titulo text-center">Material didáctico</h3>
        <div class="row">
        @foreach(\App\Models\Material::all() as $key => $material)
          <div class="col-12">
            <div class="card m-5">
              <div class="row g-0">
                <div class="col-md-4 align-content-center">
                  <img src="{{$material->imagen}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">{{$material->nombre}}</h5>
                    
                      <div class="overflow-auto card-text" style="height: 225px;"><?php echo $material->descripcion ?></div>
                      
                    <p class="card-text"><small class="text-muted">by chusTEAyuda</small></p>
                  </div>
                </div>
                <div class="d-grid gap-2">
                  <a href="{{$material->archivo}}" target="_blank" class="btn btn-primary" type="button">Descargar</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
  
@endsection
