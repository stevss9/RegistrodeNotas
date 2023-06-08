@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
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

<body >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verifica tu dirección de correo electrónico') }}</div>
    
                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Se ha enviado un nuevo enlace de verificación a tu dirección de correo electrónico.') }}
                            </div>
                        @endif
    
                        {{ __('Antes de continuar, por favor revisa tu correo electrónico para obtener el enlace de verificación.') }}
                        {{ __('Si no has recibido el correo electrónico') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Haz clic aquí para solicitar otro') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
@endsection
