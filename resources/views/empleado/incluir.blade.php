@extends('plantilla.plantilla')

@section('contenido')
    <h1>Incluir empleado</h1>
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
    <form action="{{route('empleadoIncluir')}}"  method="POST">
    @csrf
        <div class="form-group ">
        <label for="" class="col-sm-2 col-form-label"><strong>Cédula</strong></label>
        <div class="col-sm-10">
        <input type="text" class="form-control"  name="cedula" value="{{old('cedula')}}" placeholder="Cédula">
        </div>
        </div>
        <div class="form-group ">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Nombre y Apellido</strong></label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="nombreCompleto" value="{{old('nombreCompleto')}}" placeholder="Nombre y Apellido" >
        </div>
        </div>
        <div class="form-group ">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Sueldo</strong></label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="sueldo" value="{{old('sueldo')}}" placeholder="Sueldo">
        </div>
        </div>
        <div class="form-group ">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Fecha de Ingreso</strong></label>
        <div class="col-sm-10">
            <input type="date" class="form-control"  name="fechaIngreso" value="{{old('fechaIngreso')}}" placeholder="Feha de Ingreso">
        </div>
        </div>
        <div class="form-group ">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Edad</strong></label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="edad" value="{{old('edad')}}" placeholder="Edad">
        </div>
        </div>
        <button class="btn btn-primary" type="submit">Incluir</button>
      </form>
@endsection