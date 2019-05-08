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

/* EJEMPLOS DE RUTAS 

Route::get('/prueba', function () {
    return ('hola soy una ruta prueba');
});
Route::get('/prueba2', 'TestController@welcome');
Route::get('/prueba3', 'TestController@suma');
Route::get('/prueba4', 'TestController@resta'); */

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
