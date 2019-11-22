@extends('layouts.app')
@section('content')
<div class="container row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading text-center"></div>
            <div class="panel-body">
            	<img class="rounded mx-auto d-block" src="{{asset('img/contacto.png')}}" width="90%" style="" align="center">
            	<form action="{{route('informacion')}}" method="POST">
            		{{ csrf_field() }}
            		<h3 style="text-align: center; font-weight: bold;">Formulario de Contacto</h3>
            		<div class="form-group">
            			<input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Nombre">
            		</div>
            		<div class="form-group">
            			<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
            		</div>
            		<div class="form-group">
            			<input type="number" name="telefono" id="telefono" value="{{ old('telefono') }}" class="form-control" placeholder="Numero de Telefono">
            		</div>
            		<div class="form-group">
            			<textarea name="mensaje" id="mensaje" class="form-control" row="3" placeholder="Mensaje"></textarea>
            		</div>
            		<div class="d-flex justify-content-end">
            			<a href="{{ url('/') }}" class="btn btn-danger" style="margin-right: 10px">Volver Atr&aacute;s</a>
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
    <div class="col-md-4">
    	<table class="table">
    		<tr>
    			<td rowspan="2" style="background-color: #FA1717; font-weight: bold; color: #FFF;">Armenia</td>
    			<td>Tel: +57 (096) 7474515 - +57 (096) 7371764 - Cel: 321 772 0147</td>
    		</tr>
    		<tr>
    			<td>Terminal Transportes Local 23</td>
    		</tr>
    		<tr>
    			<td rowspan="2" style="background-color: #FA1717; font-weight: bold; color: #FFF;">Bolivar</td>
    			<td>Tel: +57 (096) 7473515 - +57 (096) 7371764 - Cel: 321 775 0147</td>
    		</tr>
    		<tr>
    			<td>Terminal Transportes Local 44</td>
    		</tr>
    		<tr>
    			<td rowspan="2" style="background-color: #FA1717; font-weight: bold; color: #FFF;">Buga</td>
    			<td>Tel: +57 (096) 1274515 - +57 (096) 7371764 - Cel: 321 772 1047</td>
    		</tr>
    		<tr>
    			<td>Terminal Transportes Local 55</td>
    		</tr>
    		<tr>
    			<td rowspan="2" style="background-color: #FA1717; font-weight: bold; color: #FFF;">Cartago</td>
    			<td>Tel: +57 (096) 7474515 - +57 (096) 7371764 - Cel: 321 772 1147</td>
    		</tr>
    		<tr>
    			<td>Terminal Transportes Local 33</td>
    		</tr>
    		<tr>
    			<td rowspan="2" style="background-color: #FA1717; font-weight: bold; color: #FFF;">Pereira</td>
    			<td>Tel: +57 (096) 7474515 - +57 (096) 7371764 - Cel: 321 772 0147</td>
    		</tr>
    		<tr>
    			<td>Terminal Transportes Local 10</td>
    		</tr>
    		<tr>
    			<td rowspan="2" style="background-color: #FA1717; font-weight: bold; color: #FFF;">Cali</td>
    			<td>Tel: +57 (096) 7474515 - +57 (096) 7371764 - Cel: 321 772 0147</td>
    		</tr>
    		<tr>
    			<td>Terminal Transportes Local 23</td>
    		</tr>

    	</table>
    </div>
</div>
@endsection
