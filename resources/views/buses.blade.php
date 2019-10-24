@extends('layouts.app')

@section('content')
<div class="container" width="100%">
	<div>
		<div class="card-header text-center">VEHICULOS</div>
		<div class="card-body">
			<table class="table table-hover" width="100%" style="font-weight: bold;">
				<tbody>
					<tr class="table-danger">
						<td rowspan="2">
							<img class="rounded mx-auto d-block" src="{{asset('img/carro.jpg')}}" style="width: 700px; height:  400px">
						</td>
						<td class="justify-content-left" class="table-danger">Cantidad de pasajeros: 4 Personas</td>
					</tr>
					<tr class="table-danger">
						<td class="justify-content-left"> Velocidad maxima: 80 Km/h</td>
					</tr>
					<tr class="table-warning">
						<td rowspan="2">
							<img class="rounded mx-auto d-block" src="{{asset('img/buseta.jpg')}}" style="width: 700px; height:  400px">
						</td>
						<td>Cantidad de pasajeros: 7 Personas</td>
					</tr>
					<tr class="table-warning">
						<td class="justify-content-left"> Velocidad maxima: 80 Km/h</td>
					</tr>
					<tr class="table-danger">
						<td rowspan="2">
							<img class="rounded mx-auto d-block" src="{{asset('img/fugoneta.jpg')}}" style="width: 700px; height:  400px">
						</td>
						<td>Cantidad de pasajeros: 10 Personas</td>
					</tr>
					<tr class="table-danger">
						<td class="justify-content-left"> Velocidad maxim: 80 Km/ha</td>
					</tr>
					<tr class="table-warning">
						<td rowspan="2">
							<img class="rounded mx-auto d-block" src="{{asset('img/buses.jpg')}}" style="width: 700px; height:  400px">
						</td>
						<td>Cantidad de pasajeros: 40 Personas</td>
					</tr>
					<tr class="table-warning">
						<td class="justify-content-left"> Velocidad maxima: 80 Km/h</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
</div>

@endsection