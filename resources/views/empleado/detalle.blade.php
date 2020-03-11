@extends('plantilla.plantilla')

@section('contenido')
    <h1>Detalle empleado</h1>

    <form>
        <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label"><strong>Cédula</strong></label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" name="cedula" value="{{$detalle->cedula}}">
        </div>
        </div>
        <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Nombre y Apellido</strong></label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" name="nombreCompleto" value="{{$detalle->nombreCompleto}}">
        </div>
        </div>
        <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Sueldo</strong></label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" name="sueldo" value="{{$detalle->sueldo}}">
        </div>
        </div>
        <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Fecha de Ingreso</strong></label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" name="fechaIngreso" value="{{$detalle->fechaIngreso}}">
        </div>
        </div>
        <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Edad</strong></label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" name="edad" value="{{$detalle->edad}}">
        </div>
        </div>
    <a href="{{route('empleadoIndex')}}" class="btn btn-success">Volver</a>
      </form>
@endsection