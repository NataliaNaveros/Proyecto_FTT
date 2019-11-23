@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;">Contacto</div>
                <div>

                	<table class="table">
            
                		<tr>
                			<td>ID</td>
                			<td>Nombre</td>
                			<td>Email</td>
                			<td>Telefono</td>
                			<td>Mensaje</td>
                			<td>Secciones</td>
                		</tr>
                        @foreach($contacto as $contacto)
                            <tr>
                                <td>{{$contacto->id}}</td>
                                <td>{{$contacto->nombre}}</td>
                                <td>{{$contacto->email}}</td>
                                <td>{{$contacto->telefono}}</td>
                                <td>{{$contacto->mensaje}}</td>
                                <td>
                                    <a href="{{url('notificacion/eliminar', $contacto->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Eliminar" onclick="return confirm('¿Est&aacute; seguro de eliminar este mensaje?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                	</table>
                    <div class="d-flex justify-content-end"><a href="{{route('home')}}" class="btn btn-danger">Menu</a></div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection