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

Route::get('/', 'MenuController@inicio')->name('inicio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/detalle/{id}', 'MenuController@detalle')->name('notas.detalle');

Route::post('/', 'MenuController@crear')->name('notas.crear');

Route::get('/', 'MenuController@inicio')->name('inicio');

Route::get('/holaMundo', 'MenuController@holaMundo');

Route::get('/foto/{numero?}', 'MenuController@foto');

Route::get('prueba','MenuController@prueba');

Route::get('profesor', 'MenuController@profesor')->name('profesor');

Route::get('/alumno', 'MenuController@alumno')->name('alumno');

Route::get('/nosotros/{nombre?}', 'MenuController@nosotros')->name('nosotros');

