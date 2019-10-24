@extends('layouts.app')

@section('content')
<div class="container row" style="padding: 0 auto 0 auto; margin: 0 auto 0 auto">
	<div class="col-md-7">
		<div class="card-header text-center">CARTAGO</div>
		<div style="font-family: inherit;">
			<h4 style="font-weight: bold;">¿Qué hay para hacer en Cartago?</h4>
			<img class="col-md-12" src="{{asset('img/cartago_turismo.jpg')}}">
			<p style="text-align: justify;">
				Por ser una de las ciudades más antiguas del país, esta tiene un gran valor histórico-colonial. Ha ocupado un puesto preponderante en nuestra historia. Podemos encontrarnos con un Cartago antiguo, en el cual encontramos sitios como La Casa del Virrey, Aeropuerto de Santa Ana, Plaza de Bolívar, Iglesia de San Francisco, Estación del Ferrocarril, Iglesia de Guadalupe, Puente de Anacaro.
				La casa del Virrey, es Monumento Nacional, joya arquitectónica donde se respira el alma de la época colonial, y única en su género, debe su nombre, según la tradición popular a que se construyó para recibir al Virrey Don José de Espeleta, huésped que al parecer nunca llegó. Se mandó a construir a finales del Siglo XVIII, por el Alférez Real Don Sebastián de Marisancena, como casa de vivienda familiar. Es la reproducción típica de las edificaciones andaluzas del Mediterráneo, al sur de España.
			</p>
			<h4 style="font-weight: bold;">Comida Tipica</h4>
			<p style="text-align: justify;">
				En Cartago se puede disfrutar del sabor de unos frijoles con mazamorra y arepa montañera, de los tamales Cartagüeños, o un sancocho de gallina con postre de arroz de leche.
			</p>
			<h4 style="font-weight: bold;">Festividades</h4>
			<p style="text-align: justify;">
				Celebra su Feria del Bordado en abril, siendo insignia su Industria del Bordado, los cuales son elaborados a mano.
				También es Epicentro Ganadero, y celebra su Feria Agroindustrial Turística en septiembre 
			</p>
			<h4 style="font-weight: bold;">Hoteles</h4>
			<ul>
				<li>Hotel Casa Aragon</li>
				<li>Hotel Don Gregorio</li>
				<li>Hotel Mariscal Robledo</li>
				<li>Hotel Portal Del Valle</li>
			</ul>
			<h4 style="font-weight: bold;">Restaurantes</h4>
			<ul>
				<li>A Mis Amigos Restaurante</li>
				<li>Casa Vieja</li>
				<li>Restaurante El TAITA</li>
				<li>Restaurante Toy San</li>
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