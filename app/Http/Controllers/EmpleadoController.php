<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;
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

    function vistaModificar($id){
        $detalle = Empleado::findOrFail($id);
        return view('empleado.modificar',compact('detalle'));
    }

    function modificar(Request $request,$id){
        $request->validate([
            'cedula'=>'required','nombreCompleto'=>'required','sueldo'=>'required',
            'fechaIngreso'=>'required','edad'=>'required'
        ]);
        $empleadoActualizar = Empleado::findOrFail($id);
        $empleadoActualizar->cedula = $request->cedula ;
        $empleadoActualizar->nombreCompleto = $request->nombreCompleto ;
        $empleadoActualizar->sueldo = $request->sueldo ;
        $empleadoActualizar->fechaIngreso = $request->fechaIngreso ;
        $empleadoActualizar->edad = $request->edad ;
        $empleadoActualizar->save();
        return Redirect::to('empleadoIndex')->with('mensajeM','Empleado modificado con éxito');

    }

    function eliminar($id){
        $empleadoEliminar = Empleado::findOrFail($id);
        $empleadoEliminar->delete();
        return Redirect::to('empleadoIndex')->with('mensajeE','Empleado eliminado con éxito');
    }
}
