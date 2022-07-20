@extends('layout.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 mt-5 mx-auto position-relative">
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
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-6">
                <div class="contenedor-img d-flex align-content-center justify-content-center h-100">
                  <img class="img-fluid" src="{{asset('/image/draw.svg')}}" alt="" width="350">
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-6">
                <div class="contenedor-texto mt-2">
                  <h3 class="titulo">Estamos trabajando <br>para <span class="typed"></span></h3>
                  <p class="mb-0">Estamos realizando tareas de mantenimiento, disculpa las molestias. Estaremos de vuelta en breve. <br> Si necesitas hablar con nosotros de forma urgente, puedes enviarnos un <a href="mailto:info@chusteayuda.com">email.</a></p>

                  <div class="row mt-3">
                    <div class="col-md-4 col-6">
                      <button type="button" class="btn btn-primary btn-lg p-3 rounded-4" data-bs-toggle="modal" data-bs-target="#modal_contactame">Contáctame</button>
                      @include('modals.contactame')
                    </div>
                    <div class="col-md-6 col-6 text-start">
                      <button type="button" class="btn btn-light btn-lg text-center p-3 rounded-4">Saber mas</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer w-75 mx-auto border-0 bg-transparent">
            <div class="d-flex justify-content-evenly flex-wrap my-4">
              <a href="https://www.instagram.com/chusteayuda/"><img src="{{asset('/image/icon/instagram.png')}}" style="width: 34px;"></a>
              <a href="https://www.youtube.com/channel/UCnaDdea-B4c7a_Lo1VB2mAg/featured"><img src="{{asset('/image/icon/youtube.png')}}" style="width: 34px;"></a>
              <a href="https://www.facebook.com/Chusteayuda-102777539173198"><img src="{{asset('/image/icon/facebook.png')}}" style="width: 34px;"></a>
              <a href="https://www.tiktok.com/@chusteayuda"><img src="{{asset('/image/icon/tiktok.png')}}" style="width: 34px;"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
