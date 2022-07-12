<div class="row m-0 p-1 pb-5">
  <div class="col-12 col-md-4">
    <label for="nombreCliente" class="form-label">Nombre cliente</label>
    <input type="text" class="form-control" name="name" placeholder="nombre completo" id="nombreCliente"
      @if(Route::currentRouteName()=='cliente.show' )
        value="{{$cliente->user->name}}"
      @else
        value="{{old('name')}}"
      @endif
    >
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheckName" name="check_n"
        @if(Route::currentRouteName()=='cliente.show' )
          @if($cliente->check_name == true) checked @endif
        @else
          @if(old('check_n') == true) checked @endif
        @endif>
      <label class="form-check-label" for="exampleCheckName">Mostrar nombre cliente</label>
    </div>
  </div>
  <div class="col-12 col-md-4">
    <label for="direccion" class="form-label">Dirección</label>
    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="dirección"
      @if(Route::currentRouteName()=='cliente.show' )
        value="{{$cliente->direccion}}"
      @else
        value="{{old('direccion')}}"
      @endif
    >
  </div>

  <div class="col-md-4">
    <label for="numeroDeContacto" class="form-label">Numero de contacto</label>
    <input type="number" class="form-control" name="numero_contacto" id="numeroDeContacto" placeholder="numero de contacto del cliente"
      @if(Route::currentRouteName()=='cliente.show' )
        value="{{$cliente->numero_contacto}}"
      @else
        value="{{old('numero_contacto')}}"
      @endif
    >
  </div>
  <div class="col-md-6">
    <label for="logo" class="form-label">Logo</label>
    <input type="file" class="form-control" name="logo_vista" id="logo" placeholder="logo para perfil"
      @if(Route::currentRouteName()=='cliente.show' )
        value="{{$cliente->logo}}"
      @else
        value="{{old('logo')}}"
      @endif
    >
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheckLogo" name="check_l"
        @if(Route::currentRouteName()=='cliente.show' )
          @if($cliente->check_logo == true) checked @endif
        @else
          @if(old('check_l') == true) checked @endif
        @endif
      >
      <label class="form-check-label" for="exampleCheckLogo">Mostrar logo</label>
    </div>
    @if(Route::currentRouteName() == 'cliente.show')
      <img src="{{asset($cliente->logo)}}" class="img-fluid p-2" width="75" alt="">
    @endif
  </div>
  <div class="col-md-6">
    <label for="fotoEncabezado" class="form-label">Foto encabezado</label>
    <input type="file" class="form-control" name="foto_encabezado_vista" id="fotoEncabezado" placeholder="imagen para el encabezado"
      @if(Route::currentRouteName()=='cliente.show' )
        value="{{$cliente->foto_encabezado}}"
      @else
        value="{{old('foto_encabezado')}}"
      @endif
    >
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheckEncabezado" name="check_e"
        @if(Route::currentRouteName()=='cliente.show' )
          @if($cliente->check_encabezado == true) checked @endif
        @else
          @if(old('check_e') == true) checked @endif
        @endif
      >
      <label class="form-check-label" for="exampleCheckEncabezado">Mostrar foto de encabezado</label>
    </div>
    @if(Route::currentRouteName() == 'cliente.show')
      <img src="{{asset($cliente->foto_encabezado)}}" class="img-fluid p-2" width="75" alt="">
    @endif
  </div>
  <div class="col-md-6">
    <label for="colorEncabezado" class="form-label">Color encabezado</label>
    <select class="form-select mb-3" aria-label=".form-select-lg example" name="color_encabezado">
      <option selected>Seleccionar color del encabezado</option>
      <option value="bg-card-perfil-blue">Azul</option>
      <option value="bg-card-perfil-white">Blanco</option>
      <option value="bg-card-perfil-dark">Negro</option>
      <option value="bg-card-perfil-red">Roja</option>
      <option value="bg-card-perfil-green">Verde</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="colorTextoEncabezado" class="form-label">Color texto del encabezado</label>
    <select class="form-select mb-3" aria-label=".form-select-lg example" name="color_texto_encabezado">
      <option selected>Seleccionar color de texto del encabezado</option>
      <option value="text-white">Blanco</option>
      <option value="text-dark">Negro</option>
    </select>
  </div>
  
  @if((Auth::user()->rol_id == 1))
    <div class="col-12 col-md-4">
      <label for="email" class="form-label">Tipo cliente</label>
      <select class="form-select" aria-label="Default select example" name="rol_id">
        <option value="2"
          @if(Route::currentRouteName() == 'cliente.show')
            @if($cliente->user->rol_id == 2) selected @endif
          @endif
        >
          cliente
        </option>
        <option value="4"
          @if(Route::currentRouteName() == 'cliente.show')
            @if($cliente->user->rol_id == 4) selected @endif
          @endif
        >
          cliente avanzado
        </option>
      </select>
    </div>
  @endif
  <div class="col-12 col-md-4">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="correo"
      @if(Route::currentRouteName()=='cliente.show' )
        value="{{$cliente->user->email}}"
      @else
        value="{{old('email')}}"
      @endif
    >
  </div>
  <div class="col-12 col-md-4">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" class="form-control"  autocomplete="new-password" name="password"  id="password" placeholder="contraseña"
      @if(Route::currentRouteName()=='cliente.show' )
        value=""
      @else
        value="{{old('password')}}"
      @endif
    >
  </div>
</div>
