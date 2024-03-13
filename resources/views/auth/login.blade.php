@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">

@section('content')
<div class="custom-center">
    <div class="custom-form-container">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 bg-light p-4 rounded">
                    <h2 class="text-center mb-4">{{ __('Olá, bem vindo de volta!') }}</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-2 col-form-label text-md-end">{{ __('Email') }}</label>
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-2 col-form-label text-md-end">{{ __('Senha') }}</label>
                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-5 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Manter conectado') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                @if (Route::has('password.request'))
                                    <a class="btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Entrar') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-2">
                                <a href="{{ route('register') }}" class="btn btn-success btn-block">Cadastre-se</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
