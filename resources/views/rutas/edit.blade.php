@extends('layouts.app')

@section('content')
<div class="container row  justify-content-center">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading text-center"></div>
            <div class="panel-body">
            	<form action="{{route('ruta_actulizar',$ruta->id)}}" method="POST">
            		@method('PUT')
            		{{ csrf_field() }}
            		<h3 style="text-align: center; font-weight: bold;">Actualizar ruta {{$ruta->id}}</h3>
            		<div class="form-group">
            			<input type="text" name="nombre" id="nombre" value="{{$ruta->nombre}}" class="form-control" placeholder="Nombre">
            		</div>
                    <div class="form-group">
                        <input type="text" name="distancia" id="distancia" value="{{$ruta->distancia}}" class="form-control" placeholder="Distancia">
                    </div>
            		<div class="d-flex justify-content-end">
            			<a href="{{route('ruta')}}" class="btn btn-danger" style="margin-right: 10px">Volver Atr&aacute;s</a>
            			<button type="submit" class="btn btn-success">Enviar</button>
            		</div>
            	</form>
            </div>
        </div>
    </div>
</div>
@endsection