<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use Redirect;

class EmpleadoController extends Controller
{
    function index(){
        $empleados = Empleado::paginate(3);
        return view('empleado.index',compact('empleados'));
    }

    function detalle($id){
        $detalle = Empleado::findOrFail($id);
        return view('empleado.detalle',compact('detalle'));
    }

    function vistaIncluir(){
        return view('empleado.incluir');
    }

    function incluir(Request $request){
        $request->validate([
            'cedula'=>'required','nombreCompleto'=>'required','sueldo'=>'required',
            'fechaIngreso'=>'required','edad'=>'required'
        ]);
        // $empleadoNuevo = new Empleado;
        Empleado::create($request->all());
        return Redirect::to('empleadoIndex')->with('mensajeI','Empleado incluido con éxito');

    }

    function vistaModificar(){
        return view('empleado.modificar');
    }

    function modificar(Request $request){
        $request->validate([
            'cedula'=>'required','nombreCompleto'=>'required','sueldo'=>'required',
            'fechaIngreso'=>'required','edad'=>'required'
        ]);
        // $empleadoNuevo = new Empleado;
        Empleado::create($request->all());
        return Redirect::to('empleadoIndex')->with('mensajeI','Empleado incluido con éxito');

    }
}
