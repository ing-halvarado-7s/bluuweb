@extends('plantilla.plantilla')

@section('contenido')
    <h1>Modificar empleado</h1>
    @error ('cedula')
    <div class="alert alert-danger" role="alert">
         Cédula es un Campo Obligatorio
        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
    </div>
    @enderror
    @error ('nombreCompleto')
    <div class="alert alert-danger" role="alert">
         Nombre Completo es un Campo Obligatorio
        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
    </div>
    @enderror
    @error ('sueldo')
    <div class="alert alert-danger" role="alert">
         Sueldo es un Campo Obligatorio
        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
    </div>
    @enderror
    @error ('fechaIngreso')
    <div class="alert alert-danger" role="alert">
         Fecha de Ingreso es un Campo Obligatorio
        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
    </div>
    @enderror
    @error ('edad')
    <div class="alert alert-danger" role="alert">
         Edad es un Campo Obligatorio
        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
    </div>
    @enderror
    <form action="{{route('empleadoModificar',$detalle->id)}}"  method="POST">
        @method('PUT')
        @csrf

        <div class="form-group ">
        <label for="" class="col-sm-2 col-form-label"><strong>CÃ©dula</strong></label>
        <div class="col-sm-10">
        <input type="text" class="form-control"  name="cedula" value="{{$detalle->cedula}}">
        </div>
        </div>
        <div class="form-group ">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Nombre y Apellido</strong></label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="nombreCompleto" value="{{$detalle->nombreCompleto}}">
        </div>
        </div>
        <div class="form-group ">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Sueldo</strong></label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="sueldo" value="{{$detalle->sueldo}}">
        </div>
        </div>
        <div class="form-group ">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Fecha de Ingreso</strong></label>
        <div class="col-sm-10">
            <input type="date" class="form-control"  name="fechaIngreso" value="{{$detalle->fechaIngreso}}">
        </div>
        </div>
        <div class="form-group ">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Edad</strong></label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="edad" value="{{$detalle->edad}}">
        </div>
        </div>
        <button class="btn btn-warning" type="submit">Modificar</button>
      </form>
@endsection