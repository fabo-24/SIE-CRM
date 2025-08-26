
@php($hideNavbar = true)
@extends('layouts.app')

@section('content')

<style>
    body {
        background:rgb(202, 235, 255) !important;
    }
    .card {
        box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        border-radius: 10px;
    }
    .clock {
        font-size: 5.2rem;
        margin-bottom: 1.5rem;
        color: #1565c0;
        font: sans-montserat;
        font-weight: bold;
        text-align: center;
    }

    .date {
        font-size: 1.2rem;
        margin-bottom: 1.5rem;
        color: #1565c0;
        font-weight: bold;
        text-align: center;
    }
</style>

<div class="container">
        <div>
            <div class="text-center mb-4">
            <img src="{{ asset('storage/image/sielogolargo.png') }}" alt="Logo Corporativo SIE" style="max-width: 720px;">
            </div>
            <h1 class="text-center mt-5" style="color: #2995c0;">¡Hola! bienvenido a CRM de Corporativo SIE</h1>
            <h2 class="text-center mb-5" style="color: #2995c0;">Por favor, ingrese sus credenciales</h2>
        </div>
            <div class="clock" id="clock"></div>
            <div class="date" id="date"></div>
        </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Incio de sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo de acceso') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> -->
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Acceder') }}
                                </button>

                                <a href="{{ route('register') }}" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </a>

                                

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updateClock() {
        const now = new Date();
        // Solo muestra horas y minutos, sin segundos
        const timeStr = now.toLocaleTimeString('es-ES', { hour: '2-digit', minute: '2-digit' });
        document.getElementById('clock').textContent = `${timeStr}hrs`;
    }
    setInterval(updateClock, 1000);
    updateClock();

    function updateDate() {
        const now = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const dateStr = now.toLocaleDateString('es-ES', options); 
        document.getElementById('date').textContent = `${dateStr}`;
    }
    setInterval(updateDate, 1000);
    updateDate();
</script>
@endsection
