@extends('layouts.app')

@section('content')

<div class="container">
    <div class="justify-content-center">
        <div class="card">
            <div class="panel panel-default">
                <div class="card-header panel-heading text-center">Conductores Actuales</div>
                <div style="margin-left: 15px"></div>
                <div class="panel-body">
                    <table id="example" class="table table-hover table-bordered text-center" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cedula</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($conductor as $conductor)
                            <tr>
                                <td>{{$conductor->id}}</td>
                                <td>{{$conductor->nombre}}</td>
                                <td>{{$conductor->apellido}}</td>
                                <td>{{$conductor->cedula}}</td>
                                <td>{{$conductor->telefono}}</td>
                                <td>{{$conductor->email}}</td>
                                <td>
                                    <a href="{{route('editar', $conductor->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="{{url('conductores/eliminar', $conductor->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Eliminar" onclick="return confirm('¿Est&aacute; seguro de eliminar este conductor?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row d-flex justify-content-end" style="margin: 0 10px 5px;">
                        <div>
                            <a href="{{route('create')}}" class="btn btn-success" style="margin-right: 30px;">Crear nuevo conductor</a>
                        </div>
                        <div>
                            <a href="{{route('home')}}" class="btn btn-danger">Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
