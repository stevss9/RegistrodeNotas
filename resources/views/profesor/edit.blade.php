@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Docente</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
            integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="/css/styles.css">
        <style>
            @import url(https://fonts.googleapis.com/css?family=Poppins:300);

            body {
                font-family: "Poppins";
                background: wheat;
            }

            .container1 {
                background: wheat;
            }

            .login-page {

                padding: 8% 0 0;
                margin: auto;
            }

            .form {
                position: relative;
                z-index: 1;
                background: #FFFFFF;
                margin: 0 auto 50px;
                padding: 10px;
                text-align: left;
                border-radius: 15px;
                box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
                width: 500px;
            }

            .form input {
                font-family: "Poppins", sans-serif;
                outline: 0;
                background: #f2f2f2;
                width: 450px;
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

            <div class="form container1 ">
              <h2 style="text-align: center">Editar Docente</h2>
                <form class="mt-5" action="{{ route('profesor.update', $profesor->idprofesor) }}" method="POST">
                    {!! method_field('PUT') !!}
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <div class="col">
                            <div class="form-group">
                                <label for="nom">Nombre</label>
                                <input id="nom" type="text" class="form-control" name="nombre"
                                    placeholder="Nombres" required value="{{ $profesor->nombre }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="ape">Apellidos</label>
                                <input id="ape" type="text" class="form-control" name="apellido"
                                    placeholder="Apellidos" required value="{{ $profesor->apellido }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="dir">Cedula</label>
                                <input id="dir" type="text" class="form-control" name="dui" placeholder="DUI"
                                    required value="{{ $profesor->dui }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="tel">Teléfono</label>
                                <input id="tel" class="form-control" type="text" name="telefono"
                                    placeholder="Teléfono" required value="{{ $profesor->telefono }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="ema">Correo</label>
                                <input id="ema" type="email" class="form-control" name="email"
                                    placeholder="Correo" required value="{{ $profesor->email }}">
                            </div>
                        </div>
                    </div><br>
                    <center>
                      <button type="submit" class="btn btn-primary">Guardar</button><br>
                      <a href="{{ route('profesor.index') }}" class="btn btnCrear mt-5 mb-3">Regresar</a>
                    </center>
                </form>
            </div>
        </div>
    </body>

    </html>
@endsection
