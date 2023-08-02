@extends('layouts.appAdmin')

@section('content')

<div class="card card-plain mb-">
    <div class="card-body p-3">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                    <h1 class="font-weight-bolder mb-0">Materiales</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 position-relative z-index-2">

        <div class="row">
            <div class="col-sm-6 col-12">
                {!! Form::open(['route' => 'materiales.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    @include('admin.materiales.datosMateriales', ['titulo' => 'Registrar'])
                {!! Form::close() !!}
            </div>
            <div class="col-sm-6 col-12">
                @include('admin.materiales.listarMateriales')
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script src="/js/admin/materiales.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      const fotoInput = document.getElementById('foto');
      const imagenesSeleccionadasContainer = document.getElementById('imagenesSeleccionadasContainer');

      fotoInput.addEventListener('change', function() {
        imagenesSeleccionadasContainer.innerHTML = ''; // Limpiar el contenedor antes de agregar nuevas imágenes

        if (this.files && this.files.length > 0) {
          for (let i = 0; i < this.files.length; i++) {
            const reader = new FileReader();

            reader.onload = function(e) {
              const imagen = document.createElement('img');
              imagen.src = e.target.result;
              imagen.alt = 'Imagen seleccionada';
              imagen.style.width = '100px'; // Ajusta el tamaño de la imagen como desees
              imagen.style.height = '100px'; // Ajusta el tamaño de la imagen como desees

              imagenesSeleccionadasContainer.appendChild(imagen);
            };

            reader.readAsDataURL(this.files[i]);
          }
        }
      });
    });
  </script>
@endsection
