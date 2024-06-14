@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img class="img-responsive object-fit-contain mx-auto mb-4 d-block"  style="object-position:center;"  src="<?php echo url('assets/image/logo.png'); ?>">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="col-md-6 offset-md-3">
                    <label for="email" class="col-form-label text-md-end">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                
                <div class="col-md-6 offset-md-3">
                    <label for="password" class="col-form-label text-md-end">{{ __('Senha') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-6 offset-md-3 mt-2 d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Lembrar mais tarde') }}
                        </label>
                    </div>
                </div>

                <div class="col-md-6 offset-md-3 mt-3 col-md-6 offset-md-3 d-flex justify-content-between">
                    <button type="submit" class="btn btn-success px-4 py-0">
                        {{ __('Entrar') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link text-success py-0" href="{{ route('password.request') }}">
                            {{ __('Esqueceu sua senha?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
