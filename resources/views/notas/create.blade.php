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
        <title>Agregar Calificacion desde Admin</title>
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
                <h2 style="text-align: center">Agregar Nueva Calificacion</h2>
                <form class="mt-5" action="{{ route('notas.store') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <div class="col">
                            <div class="form-group">
                                <label for="nom">Nota 1</label>
                                <input id="nom" type="text" class="form-control" name="nota1"
                                    placeholder="Nota 1" required value="{{ old('nota1') }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="ape">Nota 2</label>
                                <input id="ape" type="text" class="form-control" name="nota2"
                                    placeholder="Nota 2" required value="{{ old('nota2') }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="ape">Nota 3</label>
                                <input id="ape" type="text" class="form-control" name="nota3"
                                    placeholder="Nota 3" required value="{{ old('nota3') }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="ape">Nota 4</label>
                                <input id="ape" type="text" class="form-control" name="nota4"
                                    placeholder="Nota 4" required value="{{ old('nota4') }}">
                            </div>
                        </div>
                        @if ($alumnos && $profesores)
                            <div class="col">
                                <div class="form-group">
                                    <label for="alum">Alumno</label>
                                    <select id="alum" class="form-control" name="idalumno" placeholder="Alumno"
                                        required value="{{ old('idalumno') }}">
                                        @foreach ($alumnos as $alumno)
                                            <option value="{{ $alumno->idalumno }}">{{ $alumno->nombre }}
                                                {{ $alumno->apellido }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="pro">Profesor</label>
                                    <select id="pro" class="form-control" name="idprofesor" placeholder="Profesor"
                                        required value="{{ old('idprofesor') }}">
                                        @foreach ($profesores as $profesor)
                                            <option value="{{ $profesor->idprofesor }}">{{ $profesor->nombre }}
                                                {{ $profesor->apellido }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="cur">Curso</label>
                                    <select id="cur" class="form-control" name="idcursos" placeholder="Curso" required
                                        value="{{ old('idcursos') }}">
                                        @foreach ($cursos as $curso)
                                            <option value="{{ $curso->idcursos }}">{{ $curso->nombrecurso }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endif
                        <div class="col">
                            <div class="form-group">
                                <label for="tel">Parcial</label>
                                <input id="tel" class="form-control" type="text" name="parcial"
                                    placeholder="Parcial" required value="{{ old('parcial') }}">
                            </div>
                        </div>
                    </div><br>
                    <center>
                      <button type="submit" class="btn btn-primary" style="color:black">Guardar</button><br><br>
                      <a class="btn " href="{{ route('notas.index') }}" style="color:black">Volver</a>
                    </center>
                    
                </form>


            </div>
        </div>
    </body>


    </html>


@endsection
