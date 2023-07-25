{{-- Registrar Materiales--}}
            
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">{{$titulo}}</h6>
                </div>
            </div>
            <div class="card-footer p-3">
                    @if(Route::currentRouteName() == 'materiales.edit')
                        <div class="col-4 offset-4">
                            <img class="card-img-top" src="{{$material->imagen}}" alt="Card image cap">
                        </div>
                    @endif
                    <div class="input-group input-group-outline my-3 @if(old('nombre') != null or Route::currentRouteName() == 'materiales.edit')focused is-focused @endif">
                        <label class="form-label">Titulo</label>
                        <input type="text" class="form-control" name="nombre" @if(Route::currentRouteName() == 'materiales.edit') value="{{$material->nombre}}" @else value="{{old('nombre')}}" @endif required>
                    </div>
                    <div class="input-group input-group-outline my-3 @if(old('descripcion') != null or Route::currentRouteName() == 'materiales.edit')focused is-focused @endif">
                        <label class="form-label">Descripcion</label>
                        <input class="form-control" style="height: 100px" name="descripcion" @if(Route::currentRouteName() == 'materiales.edit') value="{{$material->descripcion}}" @else value="{{old('descripcion')}}" @endif required></input>
                    </div>
                    <label class="form-label">Material PDF</label>
                    <div class="input-group input-group-outline mb-3">
                        <input class="form-control" type="file" name="file" @if(Route::currentRouteName() != 'materiales.edit') required @endif>
                    </div>

                    <label class="form-label">Foto 384x365</label>
                    <div class="input-group input-group-outline mb-3">
                        <input class="form-control" type="file" name="foto" @if(Route::currentRouteName() != 'materiales.edit') required @endif>
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
                        <input class="form-check-input" type="checkbox" id="tienda" name="tipo" value="1"  @if(Route::currentRouteName() == 'materiales.edit') @if($material->tipo == 1) checked @endif @endif>
                        <label class="form-check-label mb-0 ms-3" for="tienda">De pago(Tienda)</label>
                    </div>

                    <div id="precio" class="input-group input-group-outline my-3 @if(old('precio') != null or Route::currentRouteName() == 'materiales.edit')focused is-focused @endif @if(Route::currentRouteName() == 'materiales.edit') @if($material->tipo == 0) d-none @endif @else d-none @endif">
                        <label class="form-label">Precio</label>
                        <input type="number" id="precioInput" class="form-control" step="0.01" min="0.00" name="precio" @if(Route::currentRouteName() == 'materiales.edit') value="{{$material->precio}}" @else value="{{old('precio')}}" @endif>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Guardar</button>
                    </div>
            </div>
        </div>
    </div>
</div>
