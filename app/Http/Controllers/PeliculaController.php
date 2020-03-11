<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

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
}
