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

    function detalle($id){
        $notas = Nota::findOrfail($id);
        return view('notas.detalle',compact('notas'));
    }

    function crear(Request $request){
        // return $request->all();
        $request->validate([
            'nombre'=>'required', 'descripcion'=>'required'
        ]);
        $notaNueva = new Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;
        $notaNueva->save();
        return back()->with('mensaje','Nota agregada');
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
