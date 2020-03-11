<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;
use Redirect;

class PeliculaController extends Controller
{
    function index(){
        $peliculas = Pelicula::paginate(2);
        return view('pelicula.index', compact('peliculas'));
    }

    function mostrar($id){
        $peli = Pelicula::findOrfail($id);
        return view('pelicula.mostrar', compact('peli'));
    }

    function mostrarVistaIncluir(){
        return view('pelicula.incluir');
    }

    function incluir(Request $request){
        $request->validate([
            'titulo'=>'required', 'genero'=>'required',
            'actorPrincipal'=>'required', 'actrizPrincipal'=>'required'
        ]);
        $peliNueva = new Pelicula;
        $peliNueva->titulo = $request->titulo;
        $peliNueva->genero = $request->genero;
        $peliNueva->actorPrincipal = $request->actorPrincipal;
        $peliNueva->actrizPrincipal = $request->actrizPrincipal;
        $peliNueva->save();

        return Redirect::to('pindex')->with('mensajeI','Pelicula Incluida');
    }

    function mostrarVistamodificar($id){
        $peliActualizada = Pelicula::findOrFail($id);
        return view('pelicula.modificar',compact('peliActualizada'));
    }

    function modificar(Request $request, $id){
        $request->validate([
            'titulo'=>'required', 'genero'=>'required',
            'actorPrincipal'=>'required', 'actrizPrincipal'=>'required'
        ]);
        $peliActualizada = Pelicula::findOrFail($id);
        $peliActualizada->titulo = $request->titulo;
        $peliActualizada->genero = $request->genero;
        $peliActualizada->actorPrincipal = $request->actorPrincipal;
        $peliActualizada->actrizPrincipal = $request->actrizPrincipal;
        $peliActualizada->save();
        return Redirect::to('pindex')->with('mensajeM','Pelicula Modificada');
    }

    function eliminar($id){
        $peliActualizada = Pelicula::findOrFail($id);
        $peliActualizada->delete();
        return Redirect::to('pindex')->with('mensajeE','Pelicula Eliminada');
    }
}
