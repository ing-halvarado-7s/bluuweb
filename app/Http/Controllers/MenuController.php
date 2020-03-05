<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    function holaMundo(){
        return 'Hola Mundo';
    }
    
    
     function foto($numero ='sin n�mero'){
        return 'Galeria de fotos. Foto Numero: '.$numero;//Mostrar valor de par�metro en un mensaje
    }
    
    function prueba($nombre='Heimys'){
        return view('pruebaRuta',compact('nombre'));//Pasar par�metro nombre para ser usado en otra p�gina
    }
    
    function profesor(){
        return view('contenidoDinamico.profesor');
    }

    function alumno(){
        return view('contenidoDinamico.alumno');
    }
    

}
