<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Flota de Transporte</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!--Bootstrap-->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFF;
                color: #000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div>
        @if (Route::has('login'))
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
                <a class="navbar-brand" href="#">Proyecto FTT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarColor02">
                    @auth
                        <a style="color: white; padding: 5px 10px 3px; margin: 5px;" href="{{ url('/home') }}">Home</a>
                    @else
                        <a style="color: white; padding: 5px 10px 3px; margin: 5px;" href="{{ route('login') }}" style="tab-size: inherit">Iniciar Sesi&oacute;n</a>
                        @if (Route::has('register'))
                            <a style="color: white; padding: 5px 10px 3px; margin: 5px;" href="{{ route('register') }}">Registrar</a>
                        @endif
                    @endauth
                </div>
            </nav>
        @endif
    </div>
    <div class="jumbotron bg-secondary">
        <h1 class="display-3" style="font-style: inherit;font-weight: bold;text-align: center"><span>Viaja Seguro <i class="fas fa-bus-alt"></i></span></h1>
    </div>
    <div class=" jumbotron bg-danger">
        <table width="100%" style="font-style: inherit;font-weight: bold; color: #FFFFFF; text-align: center; text-decoration: none">
            <tr>
                <td width="33%">

                    <img class="rounded mx-auto d-block" src="{{asset('img/gps.jpg')}}" id="foto" style="" align="center">
                </td>
                <td width="34%">
                    <img class="rounded mx-auto d-block" src="{{asset('img/bus.jpg')}}" id="foto">

                </td>
                <td width="33%">
                    <img class="rounded mx-auto d-block" src="{{asset('img/ticket.jpg')}}" id="foto">

                </td>
            </tr>
            <tr style="font-size: 20px">
                <td>
                    <p><a>RUTAS</a></p>

                </td>
                <td>
                    <p><a>BUSES</a></p>

                </td>
                <td>
                    <p><a>COMPRA DE TICKET</a></p>

                </td>
            </tr>
            <tr style="font-size:20px">
                <td>
                    <p style="text-align: center;"><a class="btn btn-info btn-lg" href="{{route('rutas')}}">Ver M&aacute;s</a></p>
                </td>
                <td>
                    <p style="text-align: center;"><a class="btn btn-info btn-lg" href="{{route('buses')}}">Ver M&aacute;s</a></p>
                </td>
                <td>
                    <p style="text-align: center;"><a class="btn btn-info btn-lg" href="#">Ver M&aacute;s</a></p>
                </td>
            </tr>
        </table>
    </div>


    <div class="jumbotron">
        <!--<h1 class="display-3" style="font-style: inherit;font-weight: bold;text-align: center"><span>Viaja Seguro <i class="fas fa-bus-alt"></i></span></h1>-->
        <img src="{{asset('img/mascotas.jpg')}}" style="width: 100%" >
        <div class="d-flex justify-content-end">
            <a href="{{route('mascota')}}" class="btn btn-info">Más Información</a>
        </div>
    </div>
    <div class=" jumbotron bg-danger">
        <table style="width: 98%; margin-left: 35px;color: #FFFFFF">
            <tr style="font-size: 30px; font-weight: bold" >
                <td>
                    <span>Nuestra Cooperativa</span>
                </td>
                <td>
                    <span>Servicio al cliente</span>
                </td>
                <td>
                    <span>Redes Sociales</span>
                </td>
            </tr>
            <tr style="font-size: 20px">
                <td>
                    <a href="{{route('conocenos')}}" style="text-decoration: none; color: #FFF"><span>Conocenos</span></a>
                </td>
                <td>
                    <a href="{{route('contacto')}}" style="text-decoration: none; color: #FFF"><span>Formulario de contacto</span></a>
                </td>
                <td>
                    <a href="https://www.facebook.com" style="text-decoration: none; color: #FFF"><span><i class="fab fa-facebook-square"></i> Facebook</span></a>
                </td>
            </tr>
            <tr style="font-size:20px">
                <td>
                    <a href="{{route('guia')}}" style="text-decoration: none; color: #FFF"><span>Guia de transporte de pasajeros</span></a>
                </td>
                <td>
                    <span>Telefono: 323 4567</span>
                </td>
                <td>
                    <a href="https://www.twitter.com" style="text-decoration: none; color: #FFF"><span><i class="fab fa-twitter-square"></i> Twitter</span></a>
                </td>
            </tr>
        </table>
    </div>
        <!--JQuery-->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>
