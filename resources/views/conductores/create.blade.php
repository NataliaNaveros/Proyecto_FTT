@extends('layouts.app')

@section('content')
<div class="container row justify-content-center">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading text-center"></div>
            <div class="panel-body">
            	<form action="{{route('crear')}}" method="POST">
            		{{ csrf_field() }}
            		<h3 style="text-align: center; font-weight: bold;">Formulario de Conductores</h3>
            		<div class="form-group">
            			<input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Nombre">
            		</div>
                    <div class="form-group">
                        <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}" class="form-control" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <input type="number" name="cedula" id="cedula" value="{{ old('cedula') }}" class="form-control" placeholder="Cedula">
                    </div>
                    <div class="form-group">
                        <input type="number" name="telefono" id="telefono" value="{{ old('telefono') }}" class="form-control" placeholder="Numero de Telefono">
                    </div>
            		<div class="form-group">
            			<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
            		</div>
            		<div class="d-flex justify-content-end">
            			<a href="{{route('conductores')}}" class="btn btn-danger" style="margin-right: 10px">Volver Atr&aacute;s</a>
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