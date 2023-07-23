{{-- Consultar Materiales--}}

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Consultar</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Material</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipo</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Creado</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materiales as $key => $value)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="{{$value->imagen}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$value->nombre}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    @if($value->tipo == 0)
                                    <span class="badge badge-sm bg-gradient-success">Gratis</span>
                                    @else
                                    <span class="badge badge-sm bg-gradient-warning">Tienda</span>
                                    @endif
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{$value->created_at}}</span>
                                </td>
                                <td class="align-middle">
                                    {!! Form::open(['route' => ['materiales.destroy', $value->id], 'method' => 'DELETE']) !!}
                                    <input type="submit" class="text-secondary font-weight-bold text-xs" value="eliminar">
                                    {!! Form::close() !!}
                                    <a href="/materiales/{{$value->id}}/edit"><input type="submit" class="text-secondary font-weight-bold text-xs" value="  editar  "></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
