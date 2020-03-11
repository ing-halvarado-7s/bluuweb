<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadoController extends Controller
{
    function index(){
        $empleados = Empleado::all();
        return view('empleado.index',compact('empleados'));
    }

    function detalle($id){
        $detalle = Empleado::findOrFail($id);
        return view('empleado.detalle',compact('detalle'));
    }
}
