<?php
Auth::routes();

// Pelicula
Route::view('plantilla','plantilla.plantilla');

Route::get('pindex','PeliculaController@index')->name('pindex');

Route::get('pmostrar/{id}','PeliculaController@mostrar')->name('pmostrar');

Route::get('pVistaIncluir','PeliculaController@mostrarVistaIncluir')->name('pVistaIncluir');

Route::post('pIncluir','PeliculaController@incluir')->name('pIncluir');

Route::get('pVistaModificar/{id}','PeliculaController@mostrarVistaModificar')->name('pVistaModificar');

Route::put('pModificar/{id}','PeliculaController@modificar')->name('pModificar');

Route::delete('pEliminar/{id}','PeliculaController@eliminar')->name('pEliminar');



// Fin de Pelicula




Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MenuController@inicio')->name('inicio');

Route::get('/detalle/{id}', 'MenuController@detalle')->name('notas.detalle');

Route::post('/', 'MenuController@crear')->name('notas.crear');

Route::get('/editar/{id}', 'MenuController@editar')->name('notas.editar');

Route::put('/editar/{id}', 'MenuController@guardar')->name('notas.guardar');

Route::delete('/eliminar/{id}', 'MenuController@eliminar')->name('notas.eliminar');

Route::get('/holaMundo', 'MenuController@holaMundo');

Route::get('/foto/{numero?}', 'MenuController@foto');

Route::get('prueba','MenuController@prueba');

Route::get('profesor', 'MenuController@profesor')->name('profesor');

Route::get('/alumno', 'MenuController@alumno')->name('alumno');

Route::get('/nosotros/{nombre?}', 'MenuController@nosotros')->name('nosotros');

