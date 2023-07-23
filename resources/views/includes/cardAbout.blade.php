  <!-- about section -->
  <section class="about_section">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
            <div class=" d-flex justify-content-center">
                <img src="images/logo.png" alt="" class="w-10" width="80%" height="auto">
            </div>
            </div>
            <div class="col-6">
            
            <p class="text-center">
                ¡el cambio comienza dentro de ti!
            </p>
            <p class="text-justify">
                Si quieres ver un mundo mejor y más empático, sé el cambio que deseas ver.
            </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-6">
                 <div class="d-flex justify-content-center mt-5">
                    <p class="text-justify">
                        Hola, soy Jesús Bolívar, licenciado en Terapia Ocupacional. Estoy aquí para ayudarte a mejorar tu calidad de vida y superar los desafíos diarios. A través de mi experiencia y conocimientos en terapia ocupacional, brindo apoyo personalizado y soluciones prácticas para maximizar tu independencia y bienestar. Explora mi sitio web para descubrir cómo juntos podemos alcanzar tus metas y mejorar tu salud física y mental. ¡Bienvenido y espero poder ser parte de tu viaje hacia una vida plena y significativa!"
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class=" d-flex justify-content-center">
                    <img src="images/sobre_mi_2.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    

    <h3 class="main-heading ">
     Mi historia
    </h3>

    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <p class="text-center">MI SÚPER PODER ES LA PACIENCIA</p>
                <br><br>
                <p class="text-justify">
                    Soy terapeuta ocupacional y a lo largo de mi carrera, he tenido el privilegio de trabajar con diversas personas en situaciones de desventaja ocupacional. Desde niños hasta adultos mayores, cada individuo ha dejado una huella profunda en mi corazón y ha enriquecido mi pasión por mi profesión.

                    Uno de los aspectos más gratificantes de mi trabajo ha sido trabajar con personas en el espectro del autismo. A través de mi experiencia y formación especializada, he tenido la oportunidad de acompañar a niños y adultos con autismo en su viaje hacia el desarrollo de habilidades funcionales y la mejora de su calidad de vida.

                    El autismo presenta desafíos únicos y complejos, pero también brinda la oportunidad de descubrir el potencial y las fortalezas de cada individuo. Mi enfoque se basa en comprender las necesidades y habilidades de cada persona, adaptando intervenciones terapéuticas personalizadas que promuevan su autonomía, desarrollo emocional y participación activa en actividades significativas.

                    A lo largo de los años, he presenciado cómo pequeños logros se convierten en grandes victorias. Ver a un niño con autismo comunicarse efectivamente por primera vez o presenciar cómo un adulto mayor encuentra alegría y satisfacción en actividades cotidianas es lo que me inspira y motiva a seguir adelante.

                    Mi objetivo principal como terapeuta ocupacional es empoderar a las personas en situación de desventaja ocupacional, brindándoles las herramientas y habilidades necesarias para que alcancen su máximo potencial y disfruten de una vida plena y significativa.

                    Si estás buscando apoyo profesional en terapia ocupacional para ti o un ser querido, te invito a explorar mi sitio web y descubrir cómo puedo ayudarte. Juntos, podemos superar desafíos, construir fortalezas y abrir nuevas oportunidades para un futuro prometedor.

                    Gracias por ser parte de mi historia y permitirme ser parte de la tuya. <br><br><br>
                </p>
            </div>
        </div>
    </div>

  </section>

   <!-- vehicle section -->
  <section class="vehicle_section layout_padding">
    <div class="container">
      <div class="">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">

            @for ($i = 1; $i <= 16; $i++)
              <div @if($i == 1) class="carousel-item active" @else class="carousel-item" @endif>
                <div class="vehicle_img-box ">
                  <img src="\images\certificados\{{$i}}.jpg" alt="" class="img-fluid w-100">
                </div>
              </div>
              
           @endfor
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

  <br><br>
  <br><br>