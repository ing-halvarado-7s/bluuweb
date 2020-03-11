@extends('plantilla.plantilla')

@section('contenido')
    <h1>Incluir empleado</h1>

    <form>
        <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label"><strong>Cédula</strong></label>
        <div class="col-sm-10">
        <input type="text" readonly  name="cedula" value="{{$detalle->cedula}}">
        </div>
        </div>
        <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Nombre y Apellido</strong></label>
        <div class="col-sm-10">
            <input type="text" readonly  name="nombreCompleto" value="{{$detalle->nombreCompleto}}">
        </div>
        </div>
        <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Sueldo</strong></label>
        <div class="col-sm-10">
            <input type="text" readonly  name="sueldo" value="{{$detalle->sueldo}}">
        </div>
        </div>
        <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Fecha de Ingreso</strong></label>
        <div class="col-sm-10">
            <input type="text" readonly  name="fechaIngreso" value="{{$detalle->fechaIngreso}}">
        </div>
        </div>
        <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Edad</strong></label>
        <div class="col-sm-10">
            <input type="text" readonly  name="edad" value="{{$detalle->edad}}">
        </div>
        </div>
        <button class="btn btn-primary" type="submit">Inluir</button>
      </form>
@endsection