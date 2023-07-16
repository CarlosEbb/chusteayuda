@extends('layouts.app')
@section('content')
  
   <div class="top_container">
    @include('includes.navbar')
    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h3>
            
          </h3>
          <h1>
            LA TERAPIA OCUPACIONAL
          </h1>
          <p>
            Ayuda a personas de todas las edades a realizar actividades diarias esenciales, fomentando autonomía y calidad de vida sin importar la condición, tipo de lesión, enfermedades o limitaciones físicas.
          </p>
          <div class="hero_btn-continer">
            <a href="https://api.whatsapp.com/send?phone=51931145727" target="_blank" class="call_to-btn btn_white-border">
              <span>
                Agendar cita
              </span>
              <img src="/images/right-arrow.png" alt="">
            </a>
          </div>
        </div>
        <div class="hero_img-container">
          <div>
            <img src="/images/hero.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end header section -->

  <!-- about section -->
  <section class="about_section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-sm-6">
          <div class=" d-flex justify-content-center">
              <img src="/images/sobre_mi.png" alt="" class="img-fluid w-100">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <h2 class="main-heading ">
            Sobre mi
          </h2>
          <p class="text-center">
            Lic. Jesús Bolívar <br>
            Con una trayectoria de más de 6 años enfocada en la atención de niños y adultos en situación de desventaja ocupacional, mi objetivo principal es continuar con mi formación en el área de la ciencia ocupacional a través de la obtención de una maestría y posterior un doctorado en el área, los cuáles me permitan realizar aportes importantes al sistema de salud y educación en el mundo.

          </p>
          <div class="d-flex justify-content-center mt-5">
            <a href="/about" class="call_to-btn  ">

              <span>
                Leer Más
              </span>
              <img src="/images/right-arrow.png" alt="">
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- about section -->

  <!-- vehicle section -->
  <section class="vehicle_section layout_padding">
    <div class="container">
      <h2 class="main-heading ">
        Material
      </h2>
      <p class="text-center">
         Disponible para descarga gratuita
      </p>
      <div class="">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
          @php
            $count = 0;
          @endphp
            @foreach(\App\Models\Material::latest()->take(4)->get() as $key => $value)
              <div @if($count == 0) class="carousel-item active" @else class="carousel-item" @endif>
              <a href="/materiales/{{$value->id}}">
                <div class="vehicle_img-box ">
                  <img src="{{$value->imagen}}" alt="" class="img-fluid w-100">
                </div>
              </a>
              </div>
              @php
                $count = $count + 1;
              @endphp
            @endforeach
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </div>
  </section>


  <!-- contact section -->
  @include("includes.cardContacto")

  
@endsection
