@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;">Información</div>
                <div>
                    <table class="table" style="text-align: center; ">
                        <tr>
                            <td>Usuarios</td>
                            <td>Compra Tickest</td>
                            <td>Notificaciones de Contacto</td>
                            <td>Buses</td>
                            <td>Conductores</td>
                            <td>Rutas</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('usuario')}}" class="btn btn-primary" style="text-decoration: none; color: #FFF; font-weight: bold; ">Ver más</a>
                            </td>
                            <td>
                                <a href="{{route('compra')}}" class="btn btn-danger" style="text-decoration: none; color: #FFF; font-weight: bold; ">Ver más</a>
                            </td>
                            <td>
                                <a href="{{route('notificaciones')}}" class="btn btn-success" style="text-decoration: none; color: #FFF; font-weight: bold; ">Ver más</a>
                            </td>
                            <td>
                                <a href="{{route('bus')}}" class="btn btn-warning" style="text-decoration: none; color: #FFF; font-weight: bold; ">Ver más</a>
                            </td>
                            <td>
                                <a href="{{route('conductores')}}" class="btn btn-info" style="text-decoration: none; color: #FFF; font-weight: bold; ">Ver más</a>
                            </td>
                            <td>
                                <a href="{{route('ruta')}}" class="btn btn-default" style="text-decoration: none; color: #000; font-weight: bold; ">Ver más</a>
                            </td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
