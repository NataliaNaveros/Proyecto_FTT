<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');
/*Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm');
Route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm');*/
Route::resource('admin', 'AdminController');
Route::get('rutas','RutasController@index')->name('rutas');
Route::get('armenia','ArmeniaController@index')->name('armenia');
Route::get('cali','CaliController@index')->name('cali');
Route::get('cartago','CartagoController@index')->name('cartago');
Route::get('bolivar','BolivarController@index')->name('bolivar');
Route::get('buga','BugaController@index')->name('buga');
Route::get('pereira','PereiraController@index')->name('pereira');
Route::get('pereira','PereiraController@index')->name('pereira');
Route::get('buses','BusesController@index')->name('buses');
Route::get('guia','GuiaController@index')->name('guia');
Route::get('contacto','ContactoController@index')->name('contacto');
Route::post('informacion', 'ContactoController@store')->name('informacion');
Route::get('conocenos','ConocenosController@index')->name('conocenos');
Route::get('mascota','MascotaController@index')->name('mascota');

Route::get('notificaciones','ContactoController@show')->name('notificaciones');
route::get('notificacion/eliminar/{id}','ContactoController@destroy');

Route::get('comprar','ComprarController@index')->name('compra');
Route::get('usuario','UsuarioController@index')->name('usuario');
#Condutores
Route::get('conductores','ConductorController@index')->name('conductores');
Route::get('conductores/create', 'ConductorController@create')->name('create');
Route::post('conductores/crear', 'ConductorController@store')->name('crear');
Route::get('conductores/edit/{id}','ConductorController@edit')->name('editar');
Route::put('conductores/actualizar/{id}','ConductorController@update')->name('actulizar');
route::get('conductores/eliminar/{id}','ConductorController@destroy');
#Bus
Route::get('bus','BusController@index')->name('bus');
Route::get('bus/create', 'BusController@create')->name('bus_create');
Route::post('bus/crear', 'BusController@store')->name('bus_crear');
Route::get('bus/edit/{id}','BusController@edit')->name('bus_editar');
Route::put('bus/actualizar/{id}','BusController@update')->name('bus_actulizar');
route::get('bus/eliminar/{id}','BusController@destroy');

#Bus
Route::get('ruta','RutaController@index')->name('ruta');
Route::get('ruta/create', 'RutaController@create')->name('ruta_create');
Route::post('ruta/crear', 'RutaController@store')->name('ruta_crear');
Route::get('ruta/edit/{id}','RutaController@edit')->name('ruta_editar');
Route::put('ruta/actualizar/{id}','RutaController@update')->name('ruta_actulizar');
route::get('ruta/eliminar/{id}','RutaController@destroy');