@extends('layouts.app')

@section('content')
<div class="container row justify-content-center">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading text-center"></div>
            <div class="panel-body">
            	<form action="{{route('bus_crear')}}" method="POST">
            		{{ csrf_field() }}
            		<h3 style="text-align: center; font-weight: bold;">Formulario de Buses</h3>
            		<div class="form-group">
            			<input type="text" name="tipo" id="tipo" value="{{ old('tipo') }}" class="form-control" placeholder="Tipo">
            		</div>
                    <div class="form-group">
                        <input type="text" name="marca" id="marca" value="{{ old('marca') }}" class="form-control" placeholder="Marca">
                    </div>
                    <div class="form-group">
                        <input type="text" name="placa" id="placa" value="{{ old('placa') }}" class="form-control" placeholder="Placa">
                    </div>
                    <div class="form-group">
                        <input type="number" name="capacidad" id="capacidad" value="{{ old('capacidad') }}" class="form-control" placeholder="Capacidad">
                    </div>
            		<div class="d-flex justify-content-end">
            			<a href="{{route('bus')}}" class="btn btn-danger" style="margin-right: 10px">Volver Atr&aacute;s</a>
            			<button type="submit" class="btn btn-success">Enviar</button>
            		</div>
            	</form>	        
            </div>
        </div>
    </div>
</div>
@endsection