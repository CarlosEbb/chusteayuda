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


            {{-- Registrar Materiales--}}
            <div class="col-sm-6 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">Registrar</h6>
                                </div>
                            </div>
                            <div class="card-footer p-3">
                                <form action="/materiales" method="POST" enctype="multipart/form-data"> @csrf
                                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                                    </div>

                                    <div class="input-group input-group-outline my-3 @if(old('nombre') != null)focused is-focused @endif">
                                        <label class="form-label">Titulo</label>
                                        <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}" required>
                                    </div>
                                    <div class="input-group input-group-outline my-3 @if(old('descripcion') != null)focused is-focused @endif">
                                        <label class="form-label">Descripcion</label>
                                        <input class="form-control" style="height: 100px" name="descripcion" value="{{old('descripcion')}}" required></input>
                                    </div>
                                    <label class="form-label">Material PDF</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input class="form-control" type="file" name="file" required>
                                    </div>

                                    <label class="form-label">Foto 384x365</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input class="form-control" type="file" name="foto" required>
                                    </div>

                                    <div class="input-group input-group-outline mb-3 focused is-focused">
                                        <label class="form-label">Publicado</label>
                                        <input type="text" class="form-control" id="publicado" name="" readonly value="chusTEAyuda" disabled>
                                    </div>

                                    <div class="input-group input-group-outline mb-3" hidden>
                                        <label class="form-label">Publicado</label>
                                        <input type="text" class="form-control" id="publicado" name="" readonly value="chusTEAyuda">
                                    </div>

                                    <div class="form-check form-switch d-flex align-items-center mb-3">
                                        <input class="form-check-input" type="checkbox" id="rememberMe" name="tipo">
                                        <label class="form-check-label mb-0 ms-3" for="rememberMe">Gratis</label>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Registrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Consultar Materiales--}}
            <div class="col-sm-6 col-12">
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
            </div>
        </div>




    </div>


</div>

@endsection

@section('js')
<script src="{{ asset('js/sidebars.js') }}"></script>
@endsection
