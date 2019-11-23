@extends('layouts.app')

@section('content')
<div class="container row justify-content-center">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading text-center"></div>
            <div class="panel-body">
            	<form action="{{route('ruta_crear')}}" method="POST">
            		{{ csrf_field() }}
            		<h3 style="text-align: center; font-weight: bold;">Formulario de Rutas</h3>
            		<div class="form-group">
            			<input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Nombre">
            		</div>
                    <div class="form-group">
                        <input type="text" name="distancia" id="distancia" value="{{ old('distancia') }}" class="form-control" placeholder="Distancia">
                    </div>
            		<div class="d-flex justify-content-end">
            			<a href="{{route('ruta')}}" class="btn btn-danger" style="margin-right: 10px">Volver Atr&aacute;s</a>
            			<button type="submit" class="btn btn-success">Enviar</button>
            		</div>
            	</form>
            	@if (session('informacion'))
	            	<div class="alert alert-success mt-3">
	            		{{session('informacion')}}
	            	</div>
	            @endif	
	        
            </div>
        </div>
    </div>
</div>
    @endsection