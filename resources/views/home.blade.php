@extends('layouts.app')

@section('content')
    <!--Hecho JSSM-->
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Desarrollo Web</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            html {
                line-height: 1.15;
                -webkit-text-size-adjust: 100%
            }

            body {
                margin: 0;
                padding: 0;
                background: wheat;
            }
        </style>
    </head>

    <body>
        <div>
            @if (@Auth::user()->hasRole('admin'))
            <br><br><br><br>
                <h2 class="text-center" style="font-size:100px"><b>Bienvenido Administrador!</b></h2><br>
                <center>
                    <img src="https://cdn-icons-png.flaticon.com/512/2942/2942813.png" alt="" width="300px" >
                </center>

            @endif

            @if (@Auth::user()->hasRole('profesor'))
            <br><br><br><br><br><br><br>
                <h2 class="text-center" style="font-size:100px"><b>Bienvenido Profesor!</b></h2><br>
                <center>
                    <img src="https://cdn-icons-png.flaticon.com/512/2784/2784445.png" alt="" width="300px" >
                </center>
            @endif

            @if (@Auth::user()->hasRole('alumno'))
            <br><br><br><br><br><br><br><br>
                <h2 class="text-center" style="font-size:100px"><b>Bienvenido Estudiante!</b></h2><br>
                <center>
                    <img src="https://cdn-icons-png.flaticon.com/512/2491/2491055.png" alt="" width="300px" >
                </center>
            @endif
        </div>

    </body>

    </html>
@endsection
