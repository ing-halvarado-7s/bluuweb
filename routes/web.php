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

Route::get('/holaMundo', function(){
    return 'Hola Mundo';
});

Route::get('/foto/{numero?}', function($numero ='sin número'){
    return 'Galeria de fotos. Foto Numero: '.$numero;
})->where('numero','[0-9]+');