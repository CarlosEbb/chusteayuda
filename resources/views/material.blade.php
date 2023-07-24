@extends('layouts.app')
@section('content')
  <!-- teacher section -->
  <section class="teacher_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading ">
        Material
      </h2>

      <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
              <p class="text-center">
                   ¡Bienvenido/a! <br><br>
              </p>
              <p class="text-justify">
               

                Me complace ofrecerte acceso gratuito a una amplia variedad de materiales exclusivos en mi página web. Creo en compartir conocimiento y recursos valiosos para ayudarte a alcanzar tus objetivos. 

                En esta sección, encontrarás contenido cuidadosamente seleccionado y creado por mí. Desde guías detalladas y libros electrónicos, hasta plantillas descargables y cursos en línea, con todo lo que necesitas para aplicar en casa. 

                Lo mejor de todo es que el material que encontrarás aquí es absolutamente gratuito. Quiero que puedas acceder a recursos de calidad sin barreras económicas, lo cual es parte de mi misión de fomentar el aprendizaje y el desarrollo personal. 

                Para acceder a estos valiosos recursos gratuitos, simplemente navega por la página web y selecciona los materiales que te interesen. No se requiere ningún tipo de registro ni pago. ¡Es tan fácil como hacer clic y descargar! 

                Te invito a visitar la página regularmente, ya que actualizo y agregó nuevo contenido de forma periódica. Además, no dudes en compartir estos recursos con tus amigos, colegas y en tus redes sociales. Cuanta más gente se beneficie de estos materiales gratuitos, mejor. 

                Agradezco tu visita y espero que encuentres los materiales que aquí se ofrecen útiles y enriquecedores. Si tienes alguna pregunta o sugerencia, no dudes en ponerte en contacto a través de nuestro formulario de contacto. Estoy aquí para ayudarte. 

                ¡Disfruta de todo el contenido gratuito que tenemos para ti! 

              </p>
          </div>
        </div>
      </div>

      <div class="container teacher_container layout_padding2">
        <div class="row">
          @foreach(\App\Models\Material::all()->where('tipo',0) as $key => $value)
            <div class="col-6 col-md-3 card">
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
