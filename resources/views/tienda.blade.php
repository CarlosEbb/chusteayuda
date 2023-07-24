@extends('layouts.app')
@section('content')

  <section class="teacher_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading ">
        Tienda
      </h2>
       <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
              <p class="text-center">
                  ¡Bienvenido a nuestra tienda en línea!<br><br>
              </p>
              <p class="text-justify">

                En nuestra tienda, encontrarás una amplia gama de materiales educativos diseñados y seleccionados específicamente para la estimulación sensorial, cognitiva y del lenguaje. Estos recursos han sido cuidadosamente seleccionados desde el enfoque de la terapia ocupacional, con el objetivo de brindar a nuestros clientes las herramientas necesarias para implementar estrategias terapéuticas efectivas en la comodidad de sus hogares. 

                Sabemos lo importante que es para ti maximizar los resultados de las intervenciones terapéuticas y acelerar su progreso. Es por eso que hemos seleccionado cuidadosamente cada producto en nuestra tienda, asegurándonos de que sean de la más alta calidad y estén respaldados por investigaciones y prácticas basadas en evidencia. 

                Nuestros materiales educativos son versátiles y pueden adaptarse a una amplia gama de necesidades y edades. Ya sea que estés buscando actividades para mejorar la memoria, el razonamiento o la atención, o si necesitas herramientas para desarrollar habilidades lingüísticas o sensoriales, tenemos algo para ti. 

                Al adquirir nuestros productos, tendrás acceso a las mismas estrategias que se utilizan en las sesiones de terapia ocupacional. Esto te permitirá implementarlas de manera efectiva en tu entorno diario, lo cual es fundamental para lograr resultados más rápidos y duraderos. Además, podrás disfrutar de la comodidad de trabajar en tu propio tiempo y ritmo, adaptando las actividades a tus necesidades individuales. 

                Estoy siempre disponible para brindarte apoyo y asesoramiento personalizado. Si tienes alguna pregunta o necesitas orientación sobre cómo utilizar nuestros materiales, no dudes en contactarnos. Estaremos encantados de ayudarte en tu camino hacia el crecimiento y la mejora cognitiva. 

                ¡No esperes más! Explora la tienda en línea y descubre cómo nuestros materiales educativos pueden marcar la diferencia en una intervención terapéutica. ¡Empieza a hacer que cada día cuente y logra resultados más rápidos y efectivos en tu viaje hacia el bienestar cognitivo y sensorial! 


              </p>
          </div>
        </div>
      </div>

      <div class="container teacher_container layout_padding2">
        <div class="row">
          @foreach(\App\Models\Material::all()->where('tipo',1) as $key => $value)
            <div class="col-3 card">
              <a href="/materiales/{{$value->id}}" target="_blank">
                <img class="card-img-top" src="{{$value->imagen}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$value->nombre}}</h5>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

@endsection
