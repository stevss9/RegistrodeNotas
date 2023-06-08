@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/styles.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Poppins:300);

        body {
            height: 100vh;
            overflow: hidden;
            font-family: "Poppins";
            background: wheat;
        }

        .login-page {
            width: 1000px;
            padding: 8% 0 0;
            margin: auto;
        }

        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 800px;
            margin: 0 auto 50px;
            padding: 75px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form input {
            font-family: "Poppins", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100px;
            /* Cambiado a 300px */
            border: 0;
            border-radius: 7px;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form button {
            font-family: "Poppins", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: wheat;
            width: 150px;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            border-radius: 7px;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }

        .form button:hover,
        .form button:active,
        .form button:focus {
            background: wheat;
        }

        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }

        .form .message a {
            color: #234666;
            text-decoration: none;
        }

        .form .register-form {
            display: none;
        }
    </style>
</head>

<body>
    <div class="login-page" style="width: 800px">
        <div class="form">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h2><i class="fas fa-user-plus"></i> {{ __('Crear una cuenta') }}</h2>
                <br><br>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                            required autocomplete="name" autofocus style="width: 300px;">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                            required autocomplete="email" style="width: 300px;">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required
                            autocomplete="new-password" style="width: 300px;">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password-confirm"
                        class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" style="width: 300px;">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-2">
                        <button type="submit" class="btn" style="color:black">
                            {{ __('Registrarse') }}
                        </button><br><br>
                    </div>
                </div>
                <p class="message">¿Ya tienes una cuenta? <a href="{{ route('login') }}">Iniciar sesión</a></p>
            </form>
        </div>
    </div>
</body>
</html>
@endsection