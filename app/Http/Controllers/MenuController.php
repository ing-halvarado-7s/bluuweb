<?php

namespace App\Http\Controllers;

use App\Nota;
use Illuminate\Http\Request;
use Redirect;

class MenuController extends Controller
{
    public function inicio(){
        $notas = Nota::paginate(4);
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
    function editar($id){
        $notas = Nota::findOrfail($id);
        return view('notas.editar',compact('notas'));
    }

    function guardar(Request $request, $id){
        // return $request->all();
        $request->validate([
            'nombre'=>'required', 'descripcion'=>'required'
        ]);
        $notaActualizada = Nota::findOrFail($id);
        $notaActualizada->nombre = $request->nombre;
        $notaActualizada->descripcion = $request->descripcion;
        $notaActualizada->save();
        return Redirect::to('/')->with('mensaje','Nota modificada');
        // return Redirect::to('http://127.0.0.1:8000/')->with('mensaje','Nota modificada');
    }

    function eliminar($id){
              
        $notaEliminada = Nota::findOrFail($id);
        $notaEliminada->delete();
        return back()->with('mensaje','Nota eliminada');
    }

    function holaMundo(){
        return 'Hola Mundo';
    }
    
    

    function foto($numero ='sin número'){
        return 'Galeria de fotos. Foto Numero: '.$numero;//Mostrar valor de parámetro en un mensaje
    }
    
    function prueba($nombre='Heimys'){
        return view('pruebaRuta',compact('nombre'));//Pasar parámetro nombre para ser usado en otra página
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
