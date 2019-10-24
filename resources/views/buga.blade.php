@extends('layouts.app')

@section('content')
<div class="container row" style="padding: 0 auto 0 auto; margin: 0 auto 0 auto">
	<div class="col-md-7">
		<div class="card-header text-center">BUGA</div>
		<div style="font-family: inherit;">
			<h4 style="font-weight: bold;">¿Qué hay para hacer en Buga?</h4>
			<img class="col-md-12" src="{{asset('img/buga_turismo.jpg')}}">
			<p style="font-weight: bold; display: inline;">Clima:</p>
			<p style="display: inline;"> Clima cálido y el cielo despejado</p><br>
			<p style="font-weight: bold;display: inline;">Gentilicio:</p>
			<p style="display: inline;">Bugueño, -a</p><br>
			<p style="font-weight: bold;display: inline;">Comida típica:</p>
			<p style="text-align: justify;">
				El sancocho de gallina en fogón de leña, el arroz atollado, la sopa de tortilla, sopa de pan de bono en la cuaresma, el guiso de carne y papa, arepas preparadas con pollo desmechado, los troncos de plátano pisado con chicharrón, los tamales, la fritanga y los maduros aborrajados. Las frituras son parte abundante de la dieta de los Bugueños
			</p>
			<h4 style="font-weight: bold;">Sitios Tur&iacute;sticos</h4>
			<ul style="text-align: justify;">
				<li>Jardín Botánico Juan María Céspedes</li>
				<li>Obelisco Faro Monumento Alejandro Cabal Pombo</li>
				<li>Parque Simón Bolívar</li>
				<li>Plaza de Cabal o Parque Cabal</li>
				<li>Basílica del Señor de los Milagros</li>
				<li>Río Guadalajara o Piedras: El clima cálido de Buga, permite disfrutar de un agradable paseo familiar, en el cual no solo se podrán sumergir en sus deliciosas aguas, sino también disfrutar de el paisaje y la flora y fauna que ofrece.</li>
				<li>Los Pailones: Piscinas naturales formadas gracias a las piedras del rio.</li>
				<li>Quebradas Chiquique y Chimbilaco: Cascadas con una bella caída que permiten la formación de piscinas naturales</li>
				<li>Reserva Natural de la Laguna de Sonso o del Chircal: Por su incomparable riqueza en flora y fauna fue declarada reserva natural en 1987, funciona como centro de educación ambiental y se convierte en un gran atractivo turístico por la presencia de diversas especies de plantas, aves, mamíferos y peces</li>
				<li>Reserva Forestal Alpes: No solo su riqueza natural hace atractivo y apropiado para el turismo a este lugar, también llama la atención y es paso obligado de turistas, visitar el Mirador de La Mariposa y la Cascada de La Nevera</li>
				<li>Parque Nacional Natural Páramo de las Hermosas: Su territorio abarca parte de los departamentos de Tolima y Valle del Cauca. Su clima templado y frío y su riqueza natural, sirven de hogar y permite la preservación de diferentes especies de flora y fauna únicas</li>
			</ul>
			<h4 style="font-weight: bold;">Hoteles</h4>
			<ul>
				<li>Hotel Guadalajara</li>
				<li>Hotel El Faro</li>
				<li>Hotel San Fernando</li>
				<li>Hotel San Julian</li>
				<li>Chrisban Hotel Boutique</li>
				<li>Hotel Solar</li>
			</ul>
			<h4 style="font-weight: bold;">Restaurantes</h4>
			<ul>
				<li>Restaurante Don Karlos</li>
				<li>Costiky</li>
				<li>Sevichería El Costeño</li>
				<li>Restaurante El Limonar</li>
				<li>Restaurante Cimarron & Cilantro</li>
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
						<a class="text-left" href="{{route('armenia')}}" style="text-decoration: none;color: #000">CONOCE M&Aacute;S</a>
					</th>
				</tr>
				<tr class="table-danger">
					<th scope="row">
						<img class="rounded mx-auto d-block" src="{{asset('img/armenia.png')}}" style="width: 275px; height: 150px">
					</th>
				</tr>
			</tbody>
		</table>		
	</div>
</div>

@endsection