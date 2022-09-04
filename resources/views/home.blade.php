@extends('layouts.appAdmin')

@section('content')
<div class="row">
  <div class="col-12 mb-3">
  <h1>Registrar Materiales</h1><br>
    <div class="card">
      <div class="card-body">
        <form action="/materiales" method="POST" enctype="multipart/form-data"> @csrf
          <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="nombre" required>
            {{-- <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div> --}}
          </div>

          <div class="form-floating">
            <textarea class="form-control" id="descripcion" style="height: 150px" name="descripcion" required></textarea>
            <label for="descripcion">Descripcion</label>
          </div>

          <div class="mb-3">
            <label for="publicado" class="form-label">Publicado por:</label>
            <input type="text" class="form-control" id="publicado" name="" readonly value="chusTEAyuda">
            {{-- <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div> --}}
          </div>

          <div class="mb-3">
            <label for="formFile" class="form-label">Material</label>
            <input class="form-control" type="file" id="formFile" name="file" required>
          </div>

          <div class="mb-3">
            <label for="formFilefoto" class="form-label">Foto 384x365</label>
            <input class="form-control" type="file" id="formFilefoto" name="foto" required>
          </div>

          <div class="d-grid gap-2">
            <input class="btn btn-primary" type="submit" value="Registrar">
          </div>
        </form>


      </div>
    </div>
  </div>
</div>


<button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>

@endsection

@section('js')
    <script src="{{ asset('js/sidebars.js') }}"></script>
@endsection