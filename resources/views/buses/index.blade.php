@extends('layouts.app')

@section('content')

<div class="container">
    <div class="justify-content-center">
        <div class="card">
            <div class="panel panel-default">
                <div class="card-header panel-heading text-center">Buses Actuales</div>
                <div style="margin-left: 15px"></div>
                <div class="panel-body">
                    <table id="example" class="table table-hover table-bordered text-center" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipo</th>
                            <th>Marca</th>
                            <th>Placa</th>
                            <th>Capacidad</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bus as $bus)
                            <tr>
                                <td>{{$bus->id}}</td>
                                <td>{{$bus->tipo}}</td>
                                <td>{{$bus->marca}}</td>
                                <td>{{$bus->placa}}</td>
                                <td>{{$bus->capacidad}}</td>
                                <td>
                                    <a href="{{route('bus_editar', $bus->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="{{url('bus/eliminar', $bus->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Eliminar" onclick="return confirm('¿Est&aacute; seguro de eliminar este conductor?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row d-flex justify-content-end" style="margin: 0 10px 5px;">
                        <div>
                            <a href="{{route('bus_create')}}" class="btn btn-success" style="margin-right: 30px;">Crear nuevo Bus</a>
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
