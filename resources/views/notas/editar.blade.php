@extends('contenidoDinamico/plantilla')

@section('contenido')
    <h1>Editar Nota</h1>
    <form action="{{route('notas.guardar',$notas->id)}}" method="POST">
        @method('PUT')
        @csrf
        @error ('nombre')
            <div class="alert alert-danger" role="alert">
                Nombre es un Campo Obligatorio
                <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            </div>  
        @enderror
        @error ('descripcion')
            <div class="alert alert-danger" role="alert">
                Descripción es un Campo Obligatorio
                <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            </div>  
        @enderror

        <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre"  value="{{$notas->nombre}}">
        <input type="text" name="descripcion" class="form-control mb-2" placeholder="Descripción" value="{{$notas->descripcion}}">
        <button type="submit" class="btn btn-warning btn-block">Editar</button>
    </form>
@endsection