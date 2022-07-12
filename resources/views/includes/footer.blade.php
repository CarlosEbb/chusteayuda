<footer class="container-fluid m-0 p-0 footer">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center my-3">
        <img src="{{asset('image/logo/c&s.png')}}" alt="care&safety">
      </div>
      <div class="col-12 col-md-6 px-5 d-flex justify-content-center align-items-center flex-column pb-4">
        <h4 class="footer-title mb-4">Redes Sociales</h4>
        <p class="footer-description-rs">Entérate de las noticias y normatividad actualizada en Trastornos del espectro autista (TEA) través de nuestras redes sociales. Síguenos e interactúa con nosotros en temas de Trastornos del espectro autista (TEA).</p>
        <p class="text-end text-white">¡Te esperamos!</p>
        <ul class="footer-list-icons-rs">
          <li>
            <a href="#"  target="_blank">
              <img src="{{asset('image/icons-footer/radix-icons_twitter-logo.svg')}}" alt="twitter">
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <img src="{{asset('image/icons-footer/bx_bxl-instagram.svg')}}" alt="instagram">
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <img src="{{asset('image/icons-footer/bi_facebook.svg')}}" alt="facebook">
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <img src="{{asset('image/icons-footer/ant-design_youtube-outlined.svg')}}" alt="youtube">
            </a>
          </li>
          <li>
            <a href="#"  target="_blank">
              <img src="{{asset('image/icons-footer/ant-design_linkedin-outlined.svg')}}" alt="linkedin">
            </a>
          </li>
        </ul>
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center align-items-center flex-column pb-4">
        <h4 class="footer-title mb-4">Contáctenos</h4>
        <ul class="footer-list-icons-contacto">
          <li >
            <img class="me-2" src="{{asset('image/icons-footer/carbon_location.svg')}}" alt="direccion">
            <p class="text-start px-2 mb-0">Esta es una calle de ejemplo</p>
          </li>
          <li>
            <img class="me-2" src="{{asset('image/icons-footer/akar-icons_phone.svg')}}" alt="numero de telefono">
            <p class="text-start px-2 mb-0">(+57) 1234567890 - (+57) 1234567890</p>
          </li>
          <li>
            <img class="me-2" src="{{asset('image/icons-footer/carbon_email.svg')}}" alt="correo electronico">
            <p class="text-start px-2 mb-0">ejemplo@ejemplo.com</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright px-5 py-2 d-flex align-items-center justify-content-center">
    <p class="mb-0">©2021 Todos los derechos reservados {{env('APP_NAME')}} </p>
  </div>
</footer>