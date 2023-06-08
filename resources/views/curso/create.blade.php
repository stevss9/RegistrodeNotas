
@extends('layouts.app')
@section('content')
<style>
  body{
      background-color: wheat
  }
  .btnCrear {
          background: white;
          color: black;
      }
</style>

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
    <title>Registrar Curso desde Admin</title>
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
            max-width: 400px;
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
            width: 300px;
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
          <h2 style="text-align: center">Agregar Cursos</h2>
          <form class="mt-5" action="{{ route('curso.store') }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
                <div class="col">
                    <div class="form-group" style="text-align: left">
                        <label for="nom">Nombre</label>
                        <input id="nom" type="text" class="form-control" name="nombrecurso" placeholder="Nombre" required value="{{ old('nombrecurso') }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group" style="text-align: left">
                        <label for="ape">Año</label>
                        <input id="ape" type="text" class="form-control" name="año" placeholder="Año" required value="{{ old('año') }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group" style="text-align: left">
                        <label for="dui">Ciclo</label>
                        <input id="dui" type="text" class="form-control" name="ciclo" placeholder="Ciclo" required value="{{ old('ciclo') }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group" style="text-align: left">
                        <label for="pro">Profesor</label>
                        <select id="pro" class="form-control" name="idprofesor" placeholder="Profesor" required>
                            @foreach ($profesores as $profesor)
                            <option value="{{ $profesor->idprofesor }}">{{ $profesor->nombre }} {{ $profesor->apellido }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div><br>
            <center>
              <button type="submit" class="btn btn-primary" style="color: black">Guardar</button><br><br>
              <a class="btn " href="{{ route('curso.index') }}" style="color: black">Volver</a>
            </center>
            
        </form>
        
        </div>
    </div>
</body>


</html>



@endsection
