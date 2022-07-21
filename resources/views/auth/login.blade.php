@extends('layouts.app')
@section('head')
  <link href="{{ asset('css/style-login.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="bg-login d-flex align-items-center">
    <div class="container">
        <div class="row d-flex justify-content-start h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                <div class="card login py-1 py-md-2 py-lg-3">
                    <a href="/" class="mx-auto mt-5">
                        <img src="{{asset('image/logo/logo.png')}}"   width="100"  class="img-fluid"  alt="{{env('APP_NAME')}}">
                    </a>
                    <div class="card-body px-3 px-md-5 py-1 py-md-3 py-lg-5">
                        <h5 class="login-title my-4  mb-md-4">Ingrese a su cuenta</h5>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group mb-4">
                                <label for="email" class="p-0">{{ __('Correo electronico') }}</label>
                                <input id="email" placeholder="correo@dominio.com" type="email" class="form-control p-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="password" class="p-0">{{ __('Contraseña') }}</label>
                                <input id="password" placeholder="contraseña" type="password" class="form-control p-2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordar usuario') }}
                                </label>
                            </div>

                            <div class="form-group text-center mt-4">
                                <button type="submit" class="btn btn-primary px-5 my-3 rounded">
                                    {{ __('Iniciar sesion') }}
                                </button>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="d-block my-3 text-center" href="{{ route('password.request') }}">
                                    {{ __('¿Se te olvidó tu contraseña?') }}
                                </a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
