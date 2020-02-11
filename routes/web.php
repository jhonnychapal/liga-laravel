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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/home', 'InicioController@index');
#Route::get('/home', 'HomeController@getHome'); # Ponerlo a funcionar
Route::get('/clasificacion', 'ClasificacionController@index');
Route::get('/clasificacion/edit/{id?}', 'ClasificacionController@edit')->where('id','[0-9]+');
Route::get('/resultados', 'ResultadoController@index');
Route::get('/clubes', 'ClubController@index');
Route::get('/estadios', 'EstadioController@index');
Route::get('/jugadores', 'JugadorController@index');