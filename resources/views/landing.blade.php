@extends('layouts.landing')
@section('head')
<style>
  body {
      background-image: linear-gradient(-25deg, #f2f2f2 50%, #0c96e4 50%);
  }
</style>
@endsection
@section('landing')
<div class="contenedor">
  <div class="row">
    <div class="col-sm-6">
      <!-- <span class="position-absolute top-20 start-50 translate-middle mt-1"><img src="{{asset('/image/logo.png')}}" alt="" style="width: 100px;"> -->
      <!-- </span> -->
    </div>
    <div class="col-sm-6">
      <div class="row">
        <div class="col-12 col-sm-3">
          <img class="position-absolute top-20 start-50 translate-middle mt-1 mt-3" src="{{asset('/image/logo/logo.png')}}" alt="" style="width: 100px;">
        </div>
        <div class="col-12 d-block d-sm-none">
          <br><br>
        </div>
        <div class="col-3 col-sm-2">
          <a href="https://www.facebook.com/Chusteayuda-102777539173198"><i class="p-3 fa fa-facebook-official fa-2x d-flex justify-content-center" aria-hidden="true"></i></a>
        </div>
        <div class="col-3 col-sm-2">
          <a href="https://www.instagram.com/chusteayuda/"><i class="p-3 fa fa-instagram fa-2x d-flex justify-content-center insta-icon" aria-hidden="true"></i></a>
        </div>
        <div class="col-3 col-sm-2">
          <a href="https://www.youtube.com/channel/UCnaDdea-B4c7a_Lo1VB2mAg/featured"><i class="p-3 fa fa-youtube-square fa-2x d-flex justify-content-center" aria-hidden="true"></i></a>
        </div>
        <div class="col-3 col-sm-2">
          <a href="https://www.tiktok.com/@chusteayuda"><img src="{{asset('/image/ticktock.png')}}" style="width: 34px;"></a>
        </div>
      </div>       
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-sm-6">
      <div class="contenedor-img">
        <img class="align-middle mt-4" src="{{asset('/image/draw.svg')}}" alt="">
      </div>
    </div>
    <div class="col-12 col-sm-6">
      <div class="contenedor-texto mt-4">
        <h3 class="titulo">Estamos trabajando <br>para <span class="typed"></span></h3>

          <p>Estamos realizando tareas de mantenimiento, disculpa las molestias. Estaremos de vuelta en breve. <br> Si necesitas hablar con nosotros de forma urgente, puedes enviarnos un <a href="mailto:info@chusteayuda.com">email.</a></p>

          <div class="row">
            <div class="col-12">
              <a href="#" class="btn-link activo d-flex justify-content-center mt-4">Saber mas..</a>  
            </div>
            <div class="col-12">
              <a href="#" class="btn-link d-flex justify-content-center mt-4">Conocenos</a>
            </div>
          </div> 
      </div>
    </div>
  </div>
</div>

     
     <a href="https://api.whatsapp.com/send?phone=51931145727" class="float" target="_blank">
     <i class="fa fa-whatsapp fa-lg my-float"></i>
     </a>

@endsection
