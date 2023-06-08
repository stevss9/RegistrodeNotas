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

        .middle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .btn {
            position: relative;
            display: block;
            color: white;
            font-size: 14px;
            font-family: "montserrat";
            text-decoration: none;
            margin: 30px 0;
            border: 2px solid #ff7675;
            padding: 14px 60px;
            text-transform: uppercase;
            overflow: hidden;
            transition: 1s all ease;
        }

        .btn::before {
            background: #ff7675;
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
            transition: all 0.6s ease;
        }

        .btn1::before {
            width: 0%;
            height: 100%;
        }

        .btn1:hover::before {
            width: 100%;
        }

        .btn2::before {
            width: 100%;
            height: 0%;
        }

        .btn2:hover::before {
            height: 100%;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        input{
            background-color: white;
        }
    </style>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="container">
    <div>
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700" style="color: black">Inicio</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 btn btn1"
                        style="color: black" style="background-color: white">Iniciar Sesion</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 btn btn2"
                            style="color: black">Registrarse</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>

</html>