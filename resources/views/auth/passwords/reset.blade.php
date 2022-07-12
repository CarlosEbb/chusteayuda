@extends('layouts.app')

@section('content')
<div class="bg-login d-flex align-items-center">
    <div class="container">
        <div class="row d-flex justify-content-start h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                <div class="card login py-5">
                    <a href="/" class="mx-auto">
                        <img src="{{asset('image/logo/c&s.png')}}" width="250"  class=" my-3"  alt="care&safety">
                    </a>
                    <div class="card-body px-5">
                        <h3 class="login-title fs-4 mb-5">Restablecer la contraseña</h3>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            
                            <div class="form-group mb-4">
                                <label for="email" class="p-0">{{ __('Dirección de correo electrónico') }}</label>
                                <input id="email" type="email" class="form-control p-2 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="password" class="p-0">{{ __('Contraseña') }}</label>
                                <input id="password" type="password" class="form-control p-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="password-confirm" class="p-0">{{ __('confirmar Contraseña') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary px-5 my-3 rounded-pill">
                                    {{ __('Restablecer la contraseña') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
