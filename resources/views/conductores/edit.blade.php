@extends('layouts.app')

@section('content')
<div class="container row  justify-content-center">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading text-center"></div>
            <div class="panel-body">
            	<form action="{{route('actulizar',$conductor->id)}}" method="POST">
            		@method('PUT')
            		{{ csrf_field() }}
            		<h3 style="text-align: center; font-weight: bold;">Actualizar conductor {{$conductor->id}}</h3>
            		<div class="form-group">
            			<input type="text" name="nombre" id="nombre" value="{{$conductor->nombre}}" class="form-control" placeholder="Nombre">
            		</div>
                    <div class="form-group">
                        <input type="text" name="apellido" id="apellido" value="{{$conductor->apellido}}" class="form-control" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <input type="number" name="cedula" id="cedula" value="{{$conductor->cedula}}" class="form-control" placeholder="Cedula">
                    </div>
                    <div class="form-group">
                        <input type="number" name="telefono" id="telefono" value="{{$conductor->telefono}}" class="form-control" placeholder="Numero de Telefono">
                    </div>
            		<div class="form-group">
            			<input type="email" name="email" id="email" value="{{$conductor->email}}" class="form-control" placeholder="Email">
            		</div>
            		<div class="d-flex justify-content-end">
            			<a href="{{route('conductores')}}" class="btn btn-danger" style="margin-right: 10px">Volver Atr&aacute;s</a>
            			<button type="submit" class="btn btn-success">Enviar</button>
            		</div>
            	</form>
            </div>
        </div>
    </div>
</div>
@endsection