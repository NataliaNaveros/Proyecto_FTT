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
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Iniciar Sesi&oacute;n</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Registrar</a>
            @endif
            @endauth
            </div>
            @endif
        </div>
       <div class="content" id="fondo">
           <div class="title m-b-md" style="color: #FFFFFF; font-weight: bold">
               <span>Viaja Seguro <i class="fas fa-bus-alt"></i></span>
            </div>
       </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 jumbotron" style="margin: 0 85px 0 10px;">
                    <img class="img-responsive" src="{{asset('img/gps.jpg')}}" id="foto">
                    <p style="text-align: center;"><a style="text-decoration: none;color: black;">RUTAS</a></p>
                    <p style="text-align: center;"><a class="btn btn-warning btn-lg" href="#">Ver M&aacute;s</a></p>
                </div>
                <div class="col-md-3 jumbotron" style="margin: 0 85px 0 10px;">
                    <img class="img-responsive" src="{{asset('img/bus.jpg')}}" id="foto">
                    <p style="text-align: center;"><a style="text-decoration: none; color: black">BUSES</a></p>
                    <p style="text-align: center;"><a class="btn btn-warning btn-lg" href="#">Ver M&aacute;s</a></p>
                </div>
                <div class="col-md-3 jumbotron" style="margin: 0 85px 0 10px;">
                    <img class="img-responsive" src="{{asset('img/ticket.jpg')}}" id="foto">
                    <p style="text-align: center;"><a style="text-decoration: none; color: black">COMPRA DE TICKET</a></p>
                    <p style="text-align: center;"><a class="btn btn-warning btn-lg" href="#">Ver M&aacute;s</a></p>
                </div>
            </div>
        </div>
        <div class=" jumbotron" id="fondo2">
            <img src="{{asset('img/mascotas.jpg')}}" style="width: 100%">
        </div>
        <div class=" jumbotron" id="fondo3">
            <table style="width: 100%; margin-left: 35px;">
                <tr style="font-size: 30px; font-weight: bold" >
                    <td>
                        <span style="color: #C91409">Nuestra Cooperativa</span>
                    </td>
                    <td>
                        <span style="color: #C91409">Servicio al cliente</span>
                    </td>
                    <td>
                        <span style="color: #C91409">Redes Sociales</span>
                    </td>
                </tr>
                <tr style="font-size: 20px">
                    <td>
                        <span style="color: #FFFFFF">Conocenos</span>
                    </td>
                    <td>
                        <span style="color: #FFFFFF">Formulario de contacto</span>
                    </td>
                    <td>
                        <span style="color: #FFFFFF"><i class="fa fa-facebook-square"></i>Facebook</span>
                    </td>
                </tr>
                <tr style="font-size:20px">
                    <td>
                        <span style="color: #FFFFFF">Contrato de transporte de pasajeros</span>
                    </td>
                    <td>
                        <span style="color: #FFFFFF">Quejas y reclamos</span>
                    </td>
                    <td>
                        <span style="color: #FFFFFF"><i class="fa fa-twitter-square"></i>Twitter</span>
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
