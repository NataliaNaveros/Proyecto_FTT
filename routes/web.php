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
