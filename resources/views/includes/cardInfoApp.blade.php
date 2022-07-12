<div class="row">
    <div class="col-6 mb-3 mb-md-0 col-md-4">
      <div class="border-primary p-3 card-datos-app-1 d-flex justify-content-between align-items-center">
        <div>
          <p class="m-0"> Centros</p>
          <h1 class="m-0 text-primary">{{\App\Models\Cliente::count()}}</h1>
        </div>
        <img src="{{asset('image/clientes.svg')}}" width="54" alt="Clientes">
      </div>
    </div>
    <div class="col-6 mb-3 mb-md-0 col-md-4">
      <div class="border-primary p-3 card-datos-app-2 d-flex justify-content-between align-items-center">
        <div>
          <p class="m-0">Informes</p>
          <h1 class="m-0 text-primary">{{\App\Models\TipoReporte::count()}}</h1>
        </div>
        <img src="{{asset('image/reportes.svg')}}" width="54" alt="Reportes">
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="border-primary p-3 card-datos-app-3 d-flex justify-content-between align-items-center">
        <div>
          <p class="m-0">Profesionales</p>
          <h1 class="m-0 text-primary">{{\App\Models\Trabajador::where('deshabilitar',false)->count()}}</h1>
        </div>
        <img src="{{asset('image/trabajadores.svg')}}" width="54" alt="Trabajadores">
      </div>
    </div>
</div>