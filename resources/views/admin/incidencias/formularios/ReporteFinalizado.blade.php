<!DOCTYPE html>
<html lang="en">
  @include('includes.head')
  <body>
    @include('includes.navbarLogo')
    <div class="container">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <img src="{{asset('image/checklist.svg')}}" class="my-5" width="150" alt="checklist">
        <p class="fs-3 text-primary">Reporte creado con éxito</p>
        <a href="/" class="btn btn-primary rounded-pill px-3">volver al inicio</a>
      </div>
    </div>
  </body>
</html>
