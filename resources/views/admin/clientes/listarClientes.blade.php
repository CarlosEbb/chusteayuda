@include('admin.clientes.eliminarClientes',$cliente)

<div class="card mb-3 border-0 card-clientes">
  <div class="card-body p-3">
    <div class="row">
      <div class="col-12 col-md-8 d-flex align-items-start justify-content-center flex-column">
        <div class="d-flex">
          <img src="{{asset($cliente->logo)}}" class="img-fluid rounded-circle mx-1 object-fit-contain" width="42" alt="">
          <div class="ms-2">
            <h5 class="card-clientes-title">{{$cliente->user->name}}</h5>
            <p class="mb-0 card-clientes-datos">
              <small>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1.3em" height="1.3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M20 15.5c-1.2 0-2.5-.2-3.6-.6h-.3c-.3 0-.5.1-.7.3l-2.2 2.2c-2.8-1.5-5.2-3.8-6.6-6.6l2.2-2.2c.3-.3.4-.7.2-1c-.3-1.1-.5-2.4-.5-3.6c0-.5-.5-1-1-1H4c-.5 0-1 .5-1 1c0 9.4 7.6 17 17 17c.5 0 1-.5 1-1v-3.5c0-.5-.5-1-1-1M5 5h1.5c.1.9.3 1.8.5 2.6L5.8 8.8C5.4 7.6 5.1 6.3 5 5m14 14c-1.3-.1-2.6-.4-3.8-.8l1.2-1.2c.8.2 1.7.4 2.6.4V19z" fill="currentColor"/></svg>
                <strong>Telefono:</strong> {{$cliente->numero_contacto}}

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1.4em" height="1.4em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 2a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2m0 7c2.67 0 8 1.33 8 4v3H4v-3c0-2.67 5.33-4 8-4m0 1.9c-2.97 0-6.1 1.46-6.1 2.1v1.1h12.2V17c0-.64-3.13-2.1-6.1-2.1z" fill="currentColor"/></svg>
                <strong>Profesionales:</strong> @if($cliente->trabajadores != null){{$cliente->trabajadores->count()}} @else 0 @endif
              </small>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 d-flex align-items-center justify-content-end card-clientes-acciones">
        <button class="btn btn-delete rounded-circle p-2 mx-2" data-bs-toggle="modal" data-bs-target="#modal-eliminar_{{$cliente->id}}" >
          <img src="{{asset('image/icons-dashboard/delete.svg')}}" width="24" height="24" alt="Eliminar">
        </button>
        <a href="{{route('cliente.show', $cliente->id)}}" class="btn btn-edit rounded-circle p-2 mx-2" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Editar">
          <img src="{{asset('image/icons-dashboard/edit.svg')}}" width="22" height="22" alt="Editar">
        </a>
        <a href="{{route('incidencia.show', $cliente->id)}}" class="btn btn-edit rounded-circle p-2 mx-2 position-relative" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Informes">
          <img src="{{asset('image/icons-dashboard/report-white.svg')}}" width="22" height="22" alt="Reporte">
          
          @if(\App\Models\Reporte::where('tipo_id','!=',20)->where('tipo_id','!=',21)->where('tipo_id','!=',22)->where('tipo_id','!=',23)->where('cliente_id',$cliente->id)->where('notificado',false)->count() != 0)
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{\App\Models\Reporte::where('tipo_id','!=',20)->where('tipo_id','!=',21)->where('tipo_id','!=',22)->where('tipo_id','!=',23)->where('cliente_id',$cliente->id)->where('notificado',false)->count()}}
            <span class="visually-hidden">unread messages</span>
          </span>
          @endif
        </a>
        <a href="/perfil/{{$cliente->id}}" class="btn btn-edit rounded-circle p-2 mx-2" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Ver perfil">
          <img src="{{asset('image/icons-dashboard/open.svg')}}" width="24" height="24" alt="Ver perfil">
        </a>
      </div>
    </div>
  </div>
</div>
