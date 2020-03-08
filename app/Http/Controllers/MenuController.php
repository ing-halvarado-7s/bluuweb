<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Nota;

class MenuController extends Controller
{
    public function inicio(){
        $notas = Nota::all();
        return view('welcome',compact('notas'));
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
    
    function nosotros($nombre=null){
        $familia = ['Rafael','Marina','Carlos','Heimys','Mariavictoria'];
        //return view('contenidoDinamico/nosotros',[familia=>$familia,nombre=>$nombre]);
        return view('contenidoDinamico/nosotros',compact('familia','nombre'));
    }

}
