@extends('layouts.master')

@section('content')
    <div class="login-reg-panel">
        <div class="login-info-box">
            <h2>Tienes una cuenta?</h2>
            <p>Inicia sesion clickando aquí!</p>
            <label id="label-register" for="log-reg-show">Iniciar sesion</label>
            <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
        </div>
                            
        <div class="register-info-box">
            <h2>¿No tienes una cuenta?</h2>
            <p>Registrate en un solo click!</p>
            <label id="label-login" for="log-login-show">Registrarse</label>
            <input type="radio" name="active-log-panel" id="log-login-show">
        </div>
                            
        <div class="white-panel">
            {{-- LOGIN --}}
            <div class="login-show">
                <h2>INICIAR SESION</h2>

                <form method="POST" action="{{ route('login') }}" class="logForm">
                    @csrf

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong> E-mail incorrecto </strong>
                        </span>
                    @enderror


                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong> Contraseña incorrecta </strong>
                        </span>
                    @enderror

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Recordar contraseña') }}
                        </label>
                    </div>

                    <a href="">¿Has olvidado la contraseña?</a>

                    <div class="flexBtn">
                        <button type="reset" class="btn btn-dark logBtn"> BORRAR </button>                               
                        <button type="submit" class="btn btn-dark logBtn"> ENTRAR </button>    
                    </div>      
                </form>
            </div>

            
            {{-- REGISTRO --}}
            <div class="register-show">
                <h2>CREAR CUENTA</h2>

                <form method="POST" action="{{ route('register') }}" class="logForm">
                    @csrf

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong> Caracteres incorrectos </strong>
                        </span>
                    @enderror

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong> Pruebe con otro E-mail</strong>
                        </span>
                    @enderror

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>Escriba otra contraseña</strong>
                            </span>
                        @enderror

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                    
                    <div class="flexBtn">
                        <button type="reset" class="btn btn-dark logBtn"> BORRAR </button>                               
                        <button type="submit" class="btn btn-dark logBtn"> ENTRAR </button>    
                    </div>                                    
                </form>
            </div>
        </div>
    </div>

@stop