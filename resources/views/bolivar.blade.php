@extends('layouts.app')

@section('content')
<div class="container row" style="padding: 0 auto 0 auto; margin: 0 auto 0 auto">
	<div class="col-md-7">
		<div class="card-header text-center">BOLIVAR</div>
		<div style="font-family: inherit;">
			<h4 style="font-weight: bold;">¿Qué hay para hacer en Armenia?</h4>
			<img class="col-md-12" src="{{asset('img/bolivar_turismo.jpg')}}">
			<p>En Bolívar Son muy conocidos y frecuentados sus balnearios naturales</p>
			<ul>
				<li>El Charco del Burro</li>
				<li>El Pailón El Mango</li>
				<li>Reserva Forestal Madrevieja del Guare</li>
				<li>Lago Primavera para los deportes náuticos</li>
			</ul>
			<p style="text-align: justify;">
				Además tambien puede visitar su hermosa Casa Colonial Tapias. La Casa de Mariela Oliveros y Tulia Torres, muestras de la colonización paisa
			</p>
			<h4 style="font-weight: bold;">Ferias y Fiestas</h4>
			<p style="text-align: justify;">
				En octubre Bolívar tiene sus fiestas y ferias. El Festival de los Antojos, el Sábado Santo y Fiestas del Divino Ecce Homo en agosto. 
			</p>
			<h4 style="font-weight: bold;">Gastronom&iacute;a</h4>
			<p style="text-align: justify;">
				Como alimentos especiales de la región se encuentran el Sancocho de Gallina,las rellenas de Lucrecia, las empanadas bolívarenses con la receta de Ofelia, los chorizos y marranitas de Alejandro,el dulce de Breva,el desamargado, tamales,  manjar blanco, los cuaresmeros de Ricaurte, las Torrejas de Susana,etc. 
			</p>
			<h4 style="font-weight: bold;">Hoteles</h4>
			<ul>
				<li>Hotel Brisas de Caracolí</li>
				<li>Hotel Oasys</li>
				<li>Hostal Campos Verde</li>
				
			</ul>
			<h4 style="font-weight: bold;">Restaurantes</h4>
			<ul>
				<li>Restaurante Don Onofre</li>
				<li>Parador Rojo Zarzal Valle del Cauca</li>
			</ul>
		</div>
		
	</div>
	<div class="col-md-5">
		<div class="card-header text-center ">RUTAS</div><br>
		<table class="table table-hover">
			<tbody>
				<tr class="table-warning">
					<th scope="row">
						<a class="text-left" href="{{route('cali')}}" style="text-decoration: none;color: #000">CONOCE M&Aacute;S</a>
					</th>
				</tr>
				<tr class="table-danger">
					<th scope="row">
						<img class="rounded mx-auto d-block" src="{{asset('img/cali.png')}}" style="width: 275px; height: 150px">
					</th>
				</tr>
				<tr class="table-warning">
					<th scope="row">
						<a class="text-left" href="{{route('armenia')}}" style="text-decoration: none;color: #000">CONOCE M&Aacute;S</a>
					</th>
				</tr>
				<tr class="table-danger">
					<th scope="row">
						<img class="rounded mx-auto d-block" src="{{asset('img/armenia.png')}}" style="width: 275px; height: 150px">
					</th>
				</tr>
				<tr class="table-warning">
					<th scope="row">
						<a class="text-left" href="{{route('pereira')}}" style="text-decoration: none;color: #000">CONOCE M&Aacute;S</a>
					</th>
				</tr>
				<tr class="table-danger">
					<th scope="row">
						<img class="rounded mx-auto d-block" src="{{asset('img/pereira.png')}}" style="width: 275px; height: 150px">
					</th>
				</tr>
				<tr class="table-warning">
					<th scope="row">
						<a class="text-left" href="{{route('cartago')}}" style="text-decoration: none;color: #000">CONOCE M&Aacute;S</a>
					</th>
				</tr>
				<tr class="table-danger">
					<th scope="row">
						<img class="rounded mx-auto d-block" src="{{asset('img/cartago.png')}}" style="width: 275px; height: 150px">
					</th>
				</tr>
				<tr class="table-warning">
					<th scope="row">
						<a class="text-left" href="{{route('buga')}}" style="text-decoration: none;color: #000">CONOCE M&Aacute;S</a>
					</th>
				</tr>
				<tr class="table-danger">
					<th scope="row">
						<img class="rounded mx-auto d-block" src="{{asset('img/buga.png')}}" style="width: 275px; height: 150px">
					</th>
				</tr>
			</tbody>
		</table>		
	</div>
</div>

@endsection