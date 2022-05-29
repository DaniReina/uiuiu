@extends('layouts.app')
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Página de registro</title>
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
                <div class="text-center">
                    <div class="Rform">                                   
                        <div class="p-3 mb-2 bg-primary bg-gradient fw-bold text-white">Formulario de registro</div>
                    </div>
                </div>

                     
        @section('content')
            <div class="container">
                <div class="row justify-content-center">
                    <div>
                        <div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div>
                                        <label for="name" class=" col-form-label text-md-end">{{ __('Nombre') }}</label>
                                        
                                        <div>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <label for="email" class="col-form-label text-md-end">{{ __('Correo electrónico') }}</label>

                                        <div>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <label for="password" class="col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                        <div>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirmar contraseña') }}</label>

                                        <div>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    </br>
                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                <a class="nav-link text-white" href="welcome2">{{ __('Registrarse') }}</a>
                                            </button>
                                        </div>
                                    </div>
                                    </br>
                                    <span>¿Ya tienes una cuenta?
                                        <button type="submit"  class="btn btn-primary">
                                            @if (Route::has('login'))
                                                <a class="nav-link text-white text-decoration-none" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                            @endif
                                        </button> 
                                    </span>
                                </form>
                                
                                </br>

                                <div class="text-center">
                                    <a href="welcome" class="boton">
                                        Volver a la página principal
                                    </a> 
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
        @endsection
    </body>
</html>
