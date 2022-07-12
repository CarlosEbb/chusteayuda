<div class="modal  fade border-0" id="modal-eliminarCA_{{$reporte->id}}" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar Incidencia</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="{{asset('image/icons-dashboard/alert-circle.svg')}}" alt="eliminar">
        <p class="mb-0 fs-4 mt-3" >Desea eliminar este incidencia</p>
        <p class="text-muted">para eliminar este reporte se le enviara una notificacion al administrador para que elimine el reporte</p>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-outline-light border-0 text-dark rounded-pill px-4" data-bs-dismiss="modal">cancelar</button>

        {!! Form::open(['route' => ['SolicitarEliminarReporteEmail', $reporte->id], 'method' => 'POST']) !!}
            <input type="submit" class="btn btn-delete text-white  rounded-pill px-4" value="eliminar">
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
