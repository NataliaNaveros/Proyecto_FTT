@extends('layouts.app')

@section('content')
<div class="container row" style="padding: 0 auto 0 auto; margin: 0 auto 0 auto">
	<div class="col-md-7">
		<div class="card-header text-center">CALI</div>
		<div style="font-family: inherit;">
			<h4 style="font-weight: bold;">¿Qué hay para hacer en Cali?</h4>
			<img class="col-md-12" src="{{asset('img/cali_turismo.jpg')}}">
			<p style="font-weight: bold; display: inline;">Clima:</p>
			<p style="display: inline;"> 23° – 36° C</p><br>
			<p style="font-weight: bold;display: inline;">Gentilicio:</p>
			<p style="display: inline;">Caleño-a</p><br>
			<p style="font-weight: bold;display: inline;">Comida típica:</p>
			<p style="text-align: justify;">
				Sancocho de Gallina, el Arroz Atollado. La bebida típica de Cali es el champús y el cholado. Existen postres como el Manjar blanco, las Gelatinas de Pata, las Macetas del Valle y el Aborrajado. También como aperitivo se pueden disfrutar los “antojitos” caleños como las marranitas o puerquitas, elaboraciones con plátano frito y chicharrón; las empanadas; entre muchos otros.
				Cali es uno de los principales centros económicos e industriales de Colombia, además de ser el principal centro urbano, cultural, económico, industrial y agrario del suroccidente del país y el tercero a nivel nacional. Es famosa por la salsa y el gran número de discotecas del barrio de Juanchito. Tiene una importante oferta turística y recreativa, tanto para visitantes como para sus habitantes permanentes. El centro de la ciudad conserva muchas de las construcciones originales de la fundación, y es lugar de museos y teatros para el enriquecimiento cultural.
			</p>
			<h4 style="font-weight: bold;">Sitios Tur&iacute;sticos</h4>
			<ul>
				<li>El Zoológico de Cali</li>
				<li>Cerro de las tres Cruces</li>
				<li>La Iglesia de San Antonio</li>
				<li>Barrio Granada</li>
				<li>La Iglesia la Ermita</li>
				<li>El Gato de Tejada</li>
				<li>El Cristo Rey</li>
				<li>El Parque del Perro San Fernando</li>
				<li>Museo la Tertulia</li>
				<li>Monumento a Sebastián de Belalcázar</li>
				<li>Museo de la Caña de Azucar</li>
				<li>Museo Aereo Fenix</li>
				<li>Río Pance</li>
				<li>Museo de Arte Colonial y Religioso La Merced</li>
				<li>Loma de la Cruz</li>
				<li>Iglesia San Francisco</li>
				<li>Plaza de Cayzedo</li>
				<li>Dapa</li>
				<li>Caliwood</li>
			</ul>
			<h4 style="font-weight: bold;">Hoteles</h4>
			<ul>
				<li>Cali Marriott Hotel</li>
				<li>Hampton by Hilton Cali Colombia</li>
				<li>Torre de Cali Plaza Hotel </li>
				<li>Intercontinental Cali </li>
			</ul>
			<h4 style="font-weight: bold;">Restaurantes</h4>
			<ul>
				<li>Platillos Voladores</li>
				<li>Restaurante Rayuela</li>
				<li>Trilogia Restaurante</li>
				<li>The Market Cali</li>
				<li>Azul Restaurante</li>
				<li>La Cocotta</li>
			</ul>
		</div>
		
	</div>
	<div class="col-md-5">
		<div class="card-header text-center ">RUTAS</div><br>
		<table class="table table-hover">
			<tbody>
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