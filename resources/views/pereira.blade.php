@extends('layouts.app')

@section('content')
<div class="container row" style="padding: 0 auto 0 auto; margin: 0 auto 0 auto">
	<div class="col-md-7">
		<div class="card-header text-center">PEREIRA</div>
		<div style="font-family: inherit;">
			<h4 style="font-weight: bold;">¿Qué hay para hacer en Pereira?</h4>
			<img class="col-md-12" src="{{asset('img/pereira_turismo.jpg')}}">
			<p style="font-weight: bold; display: inline;">Clima:</p>
			<p style="display: inline;"> 15° – 26° C</p><br>
			<p style="font-weight: bold;display: inline;">Pereirano-a</p>
			<p style="display: inline;">Cuyabro, Armenio, -a</p><br>
			<p style="font-weight: bold;display: inline;">Comida típica:</p>
			<p style="text-align: justify;">
				El maíz y el fríjol son importantes en la cocina de Pereira y sus alrededores. Se destaca la bandeja paisa, conocida también como típico montañero y cuya receta original tiene quince ingredientes.
				Pereira, capital del departamento de Risaralda. Es la ciudad más poblada de la región del eje cafetero. Por estar en el centro del Triángulo de oro (Bogotá, Medellín y Cali), ha cobrado gran relevancia, especialmente en el ámbito del comercio.
				En lo turístico, desde el Parque Temático Ukumarí hasta la Laguna del Otún, o el Nevado de Santa Isabel, todos ubicados dentro del municipio, ofrecen escenarios para actividades que van desde el deporte de aventura al ecoturismo. Pereira también es conocida por su vida nocturna, debido a sus bares y discotecas.
			</p>
			<h4 style="font-weight: bold;">Sitios Tur&iacute;sticos</h4>
			<ul>
				<li>Bioparque Ukumar&iacute;</li>
				<li>Termales de Santa Rosa de Cabal</li>
				<li>Ecoparque La granja de No&eacute;</li>
				<li>El Jard&iacute;n Botánico de Marsella</li>
				<li>Parque Nacional los Nevados</li>
				<li>Laguna del Ot&uacute;n</li>
				<li>Reserva Ucumari</li>
				<li>Turismo Ejecutivo</li>
				<li>Centro Cultural Lucy Tejada</li>
				<li>Parque Lineal Egoy&aacute;</li>
				<li>Plaza C&iacute;vica Ciudad Victoria </li>
				<li>El Viaducto César Gaviria Trujillo</li>
			</ul>
			<h4 style="font-weight: bold;">Ferias y Fiestas</h4>
			<ul>
				<li>Semana Santa en Pereira</li>
				<li>Fiestas de la Cosecha en Agosto</li>
				<li>Festival del Despecho</li>
			</ul>
			<h4 style="font-weight: bold;">Hoteles</h4>
			<ul>
				<li>Movich Hotel de Pereira</li>
				<li>Hotel Castilla Real</li>
				<li>Luxor Plaza Hotel</li>
				<li>Luxor Condina Hotel</li>
			</ul>
			<h4 style="font-weight: bold;">Restaurantes</h4>
			<ul>
				<li>Kilaba</li>
				<li>La Trattoría</li>
				<li>El Mesón Español</li>
				<li>Hispania</li>
				<li>Maria La Mexicana Restaurante</li>
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
						<a class="text-left" href="{{route('bolivar')}}" style="text-decoration: none;color: #000">CONOCE M&Aacute;S</a>
					</th>
				</tr>
				<tr class="table-danger">
					<th scope="row">
						<img class="rounded mx-auto d-block" src="{{asset('img/bolivar.png')}}" style="width: 275px; height: 150px">
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