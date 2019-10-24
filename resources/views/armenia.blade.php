@extends('layouts.app')

@section('content')
<div class="container row" style="padding: 0 auto 0 auto; margin: 0 auto 0 auto">
	<div class="col-md-7">
		<div class="card-header text-center">ARMENIA</div>
		<div style="font-family: inherit;">
			<h4 style="font-weight: bold;">¿Qué hay para hacer en Armenia?</h4>
			<img class="col-md-12" src="{{asset('img/armenia_turismo.jpg')}}">
			<p style="font-weight: bold; display: inline;">Clima:</p>
			<p style="display: inline;"> Tropical –  18° 28° C</p><br>
			<p style="font-weight: bold;display: inline;">Gentilicio:</p>
			<p style="display: inline;">Cuyabro, Armenio, -a</p><br>
			<p style="font-weight: bold;display: inline;">Comida típica:</p>
			<p style="text-align: justify;">
				La mazamorra de maíz endulzada con panela o la aguapanela con queso son bebidas típicas. Las arepas de maíz con queso, los buñuelos con natilla, las solteritas, las obleas con crema de leche, los esponjados de fresa y Guanábana y las brevas con queso.
				En la ciudad de Armenia, se pueden encontrar una gran variedad de espacios para compartir en familia como parques, sus calles, centros comerciales, donde se disfruta de un ambiente tranquilo y seguro, contemplando sus hermosas calles o respirando el aire puro que ofrecen sus parques.
			</p>
			<h4 style="font-weight: bold;">Sitios Tur&iacute;sticos</h4>
			<ul>
				<li>Comercial de Cielos Abiertos</li>
				<li>El Parque Sucre</li>
				<li>La Plaza de Bolívar</li>
				<li>El Parque de los Fundadores</li>
				<li>El Museo del Oro Quimbaya</li>
				<li>El Coliseo del Café El Parque de la Vida</li>
			</ul>
			<h4 style="font-weight: bold;">Ferias y Fiestas</h4>
			<p style="text-align: justify;">
				Las Fiestas Cuyabras que tienen lugar cada año en Armenia ofrecen una programación que incluye verbenas populares, concurso de duetos, desfile del yipao (los jeep Willys que suben por las montañas del departamento), la elección de la reina chapolera y exposición de artesanías, entre otras cosas 
			</p>
			<h4 style="font-weight: bold;">Hoteles</h4>
			<ul>
				<li>Hotel Centenario</li>
				<li>Hotel Allure AromaMocawa</li>
				<li>Hotel Bolivar Plaza</li>
				<li>La Floresta Hotel</li>
			</ul>
			<h4 style="font-weight: bold;">Restaurantes</h4>
			<ul>
				<li>La Fogata</li>
				<li>Darpapaya</li>
				<li>Café Quindío</li>
				<li>Restaurante El Roble</li>
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