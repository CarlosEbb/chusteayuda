@include('admin.incidencias.eliminarIncidencias',$reporte)

@if(Auth::user()->rol_id == 4)
    @include('admin.incidencias.eliminarIncidenciasClienteAvanzado',$reporte)
@endif

<div class="card mb-3 card-clientes mt-3">
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-md-9 d-flex align-items-start justify-content-center flex-column">
        <div class="d-flex">
          <img src="{{asset('image/icons-dashboard/report.svg')}}" class="img-fluid" width="26">
          <div class="ms-3">
            <h6 class="card-clientes-title">{{$reporte->nombre_empleado}}</h6>
            <p class="mb-0 card-clientes-datos">
              <small>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1.3em" height="1.3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M9 10H7v2h2v-2m4 0h-2v2h2v-2m4 0h-2v2h2v-2m2-7h-1V1h-2v2H8V1H6v2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m0 16H5V8h14v11z" fill="currentColor"/></svg>
                <strong>Fecha:</strong> {{$reporte->created_at->format('d/m/Y')}}

                <strong>
                  @if($reporte->tipo_id == 7)
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1.4em" height="1.4em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 2a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2m0 7c2.67 0 8 1.33 8 4v3H4v-3c0-2.67 5.33-4 8-4m0 1.9c-2.97 0-6.1 1.46-6.1 2.1v1.1h12.2V17c0-.64-3.13-2.1-6.1-2.1z" fill="currentColor"/></svg>
                  Contratista:
                  @else
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1.3em" height="1.3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5M12 2a7 7 0 0 1 7 7c0 5.25-7 13-7 13S5 14.25 5 9a7 7 0 0 1 7-7m0 2a5 5 0 0 0-5 5c0 1 0 3 5 9.71C17 12 17 10 17 9a5 5 0 0 0-5-5z" fill="currentColor"/></svg>
                    Lugar:
                  @endif
                </strong>
                {{$reporte->lugar}}
              </small>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3 d-flex align-items-end justify-content-end card-clientes-acciones">
        @if(Auth::user()->rol_id == 1)
          <button class="btn btn-delete rounded-circle p-2 mx-2" data-bs-toggle="modal" data-bs-target="#modal-eliminar_{{$reporte->id}}" >
            <img src="{{asset('image/icons-dashboard/delete.svg')}}" width="24" height="24" alt="Eliminar">
          </button>
        @endif
        @if(Auth::user()->rol_id == 4)
          <button class="btn btn-delete rounded-circle p-2 mx-2" data-bs-toggle="modal" data-bs-target="#modal-eliminarCA_{{$reporte->id}}" >
            <img src="{{asset('image/icons-dashboard/delete.svg')}}" width="24" height="24" alt="Eliminar">
          </button>
        @endif
        @if($reporte->tipo->pdf)
          <a href="/reportePDF/{{$reporte->id}}" class="btn btn-edit rounded-circle p-2 mx-2" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="ver pdf">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12zM4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm12 6V9c0-.55-.45-1-1-1h-2v5h2c.55 0 1-.45 1-1zm-2-3h1v3h-1V9zm4 2h1v-1h-1V9h1V8h-2v5h1zm-8 0h1c.55 0 1-.45 1-1V9c0-.55-.45-1-1-1H9v5h1v-2zm0-2h1v1h-1V9z" fill="white"/></svg>
          </a>
        @endif
        @if ($reporte->tipo->id == 18)
          <a href="/reporteEditar/{{$reporte->id}}?cliente_id={{$cliente_id}}" class="btn btn-edit rounded-circle p-2 mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Editar">
            <img src="{{asset('image/icons-dashboard/edit.svg')}}" width="22" height="22" alt="Editar">
          </a>
        @endif
        <a href="/reporte/{{$reporte->id}}" class="btn btn-edit rounded-circle p-2 mx-2" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="ver reporte">
          <img src="{{asset('image/icons-dashboard/open.svg')}}" width="24" height="24" alt="Ver incidencia">
        </a>
      </div>
    </div>
  </div>
</div>
