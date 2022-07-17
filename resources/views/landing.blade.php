@extends('layout.app')
@section('content')
    
  <div class="container">
    <div class="fondo">
      <div class="fondo-1 opacity-25">
        <img class="opacity-75 pe-none" src="{{asset("/image/Vector.png")}}" alt="">
      </div>
      <div class="fondo-2 opacity-25">
        <img class="opacity-75 pe-none" src="{{asset("/image/Vector-1.png")}}" alt="">
      </div>
    </div>
    <div class="card p-3">
      <div class="col-12 text-center">
          <img class="center img-fluid pe-none" src="{{asset('/image/logo/logo.png')}}" alt="" style="width: 140px;">
      </div>

      <div class="row pt-3">
        <div class="col-12 col-sm-6">
          <div class="contenedor-img text-center">
            <img class="align-middle img-fluid pe-none" src="{{asset('/image/draw.svg')}}" alt="" style="width: 340px;">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="contenedor-texto mt-4">
            <h3 class="titulo">Estamos trabajando <br>para <span class="typed"></span></h3>

            <p>Estamos realizando tareas de mantenimiento, disculpa las molestias. Estaremos de vuelta en breve. <br> Si necesitas hablar con nosotros de forma urgente, puedes enviarnos un <a href="mailto:info@chusteayuda.com">email.</a></p>

            <div class="row mt-5">
              <div class="col-12 col-sm-6 text-center">
                <button type="button" class="btn btn-primary btn-lg p-3 rounded-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Contáctame</button>
                @include('modals.contactame')
              </div>
              <div class="col-12 col-sm-6 text-center">
                <button type="button" class="btn btn-light btn-lg text-center p-3 rounded-4">Saber mas..</button>
              </div>
            </div> 
          </div>
        </div>
        <div class="col-sm-12 mt-4">
          <div class="row">
            <div class="offset-sm-2 col-3 col-sm-2 text-center">
              <a href="https://www.instagram.com/chusteayuda/"><img src="{{asset('/image/icon/instagram.png')}}" style="width: 34px;"></a>
            </div>
            <div class="col-3 col-sm-2 text-center">
              <a href="https://www.youtube.com/channel/UCnaDdea-B4c7a_Lo1VB2mAg/featured"><img src="{{asset('/image/icon/youtube.png')}}" style="width: 34px;"></a>
            </div>
            <div class="col-3 col-sm-2 text-center">
              <a href="https://www.facebook.com/Chusteayuda-102777539173198"><img src="{{asset('/image/icon/facebook.png')}}" style="width: 34px;"></a>
            </div>
            <div class="col-3 col-sm-2 text-center">
              <a href="https://www.tiktok.com/@chusteayuda"><img src="{{asset('/image/icon/tiktok.png')}}" style="width: 34px;"></a>
            </div>
          </div>       
        </div>
      </div>
    </div>
  </div>

@endsection