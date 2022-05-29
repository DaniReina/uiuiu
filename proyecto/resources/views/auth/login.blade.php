@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio de sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
    <style>

        body{
        background: #59a9ff;

        background: linear-gradient(to right,#f0f0f0, #59a9ff);
        }
        .bg{
            background-image: url(imagenes/login3.jpg);
            background-position: center center ;
        }
    </style>
</head>

<body>
    <div class="container w-75 bg-primary mt-5 mb-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>

            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                <img src="imagenes/libreria1.png" width="48" alt="logo">
            </div>
            <h2 class="fw-bold text-center py-5">Bienvenido</h2>
    @section('content')
    <div class="container">
        <div class="col-md-12">                                
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label for="email" class=" col-form-label text-md-end">{{ __('Correo electrónico') }}</label>
                <div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </input>
                </div>
                    
                <label for="password" class=" col-form-label text-md-end">{{ __('Contraseña') }}</label>
                <div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </input>
                </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('¿Olvidasté tu contraseña?') }}
                        </a>
                    @endif
                    
                <div class="row mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Mantenerme conectado') }}
                            </label>
                        </div>
                    </div>
                
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                <a class="nav-link text-white" href="welcome2">{{ __('Iniciar sesión') }}</a>
                            </button>                          
                        </div>
                    </div>
                    </br>
                    <span>¿No tienes una cuenta todavía?
                        <button type="submit"  class="btn btn-primary">
                            @if (Route::has('register'))    
                                <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Registro') }}</a>     
                            @endif
                        </button> 
                    </span>
                                                     
                        
                </div>
                </form> 

                </br>

                <div class="text-center">
                    <a href="welcome" class="boton">
                        Volver a la página principal
                    </a>  
                </div>
            </form> 
        </div>
    </div>
    @endsection
</body>
</html>
