@extends('layouts.app')
@section('head')
  <link href="{{ asset('css/style-login.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="bg-login d-flex align-items-center">
    <div class="container">
        <div class="row d-flex justify-content-start h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                <div class="card login py-5">
                    <a href="/" class="mx-auto">
                        <img src="{{asset('image/logo/logo.png')}}"   width="100"  class="img-fluid"  alt="{{env('APP_NAME')}}">
                    </a>
                    <div class="card-body px-5">
                        <h5 class="login-title fs-4 mb-5">Restablecer la contraseña</h5>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="email" class="p-0">{{ __('Dirección de correo electrónico') }}</label>
                                <input id="email" type="email" class="form-control p-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary px-5 my-3 rounded-pill">
                                    {{ __('Send Password Reset Link') }}
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
