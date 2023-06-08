@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear Nuevo Estudiante desde Admin</title>
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
                padding: 30px;
                text-align: center;
                border-radius: 15px;
                box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            }

            .form input {
                font-family: "Poppins", sans-serif;
                outline: 0;
                background: #f2f2f2;
                width: 200px;
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
                <form class="mt-5" action="{{ route('alumnos.store') }}" method="POST">
                    {!! csrf_field() !!}
                    <h2><i class="fas fa-user-plus"></i> Registro de Alumno</h2>
                    <br><br>
                    <div class="form-group row">
                        <div class="col">
                            <div class="form-group" style="text-align: left">
                                <label for="nom">Nombre</label>
                                <input id="nom" type="text" class="form-control" name="nombre"
                                    placeholder="Nombres" required value="{{ old('nombre') }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group" style="text-align: left">
                                <label for="ape">Apellidos</label>
                                <input id="ape" type="text" class="form-control" name="apellido"
                                    placeholder="Apellidos" required value="{{ old('apellido') }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group" style="text-align: left">
                                <label for="fecha">Fecha de nacimiento</label>
                                <input id="fecha" type="date" class="form-control" name="fechanacimiento"
                                    placeholder="Fecha de nacimiento" required value="{{ old('fechanacimiento') }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group" style="text-align: left">
                                <label for="dir">Dirección</label>
                                <input id="dir" type="text" class="form-control" name="direccion"
                                    placeholder="Dirección" required value="{{ old('direccion') }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group" style="text-align: left">
                                <label for="gen">Género</label>
                                <select id="gen" class="form-control" name="genero" placeholder="Género" required>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group" style="text-align: left">
                                <label for="tel">Teléfono</label>
                                <input id="tel" class="form-control" type="text" name="telefono"
                                    placeholder="Teléfono" required value="{{ old('telefono') }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group" style="text-align: left">
                                <label for="ema">Correo</label>
                                <input id="ema" type="email" class="form-control" name="correo"
                                    placeholder="Correo" required value="{{ old('correo') }}">
                            </div>
                        </div>
                    </div><br>
                    <button type="submit" class="btn btn-primary" style="color:black">Guardar</button><br><br>
                    <a class="btn" href="{{ route('alumnos.index') }}" style="color:black"
                        style="background-color: wheat"><i class="bi bi-arrow-90deg-left"></i>
                        Volver</a>
                </form>
            </div>
        </div>
    </body>


    </html>


@endsection
