@extends('layouts.app')

@section('content')
<div class="container">
	<div class="jumbotron">
		<div class="d-flex justify-content-center">
			<img src="{{asset('img/viajar.jpeg')}}" style="border-radius: 5px">
		</div>
	</div>
	<div class="progress">
		<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<div>
		<h3 style="font-weight: bold; margin-top: 5px;">VIAJA CON TU MASCOTA</h3>
		<p style="text-align: justify; font-size: 18px "> Transportamos a toda la familia así que puedes viajar con tu mascota en nuestros vehículos, teniendo en cuenta la siguiente información.<br>
		Asegúrate que tu mascota pueda viajar cómodamente en un guacal de 25 x 40 cms, en nuestras bodegas, las cuales están perfectamente adecuadas y ventiladas para su comodidad. Comunícate con la oficina de tu ciudad mínimo dos horas de anterioridad, para que nuestros colaboradores, puedan asignarte uno de ellos.<br>
		Ten presente que la comodidad de nuestros #Viajeros es prioridad, así como la ley.  Si tu mascota no cabe en el guacal, es necesario llegar a un acuerdo con nuestro conductor y  si ningún pasajero tiene problemas de alergias o le incomoda, la mascota puede viajar en el pasillo.</p>
	</div>
</div>

@endsection