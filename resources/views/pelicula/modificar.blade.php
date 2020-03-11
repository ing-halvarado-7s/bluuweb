@extends('plantilla.plantilla')

@section('contenido')

        <h1>Modificar Película</h1>

    <form action="{{route('pModificar',$peliActualizada->id)}}" method="POST">
        @method('PUT')
        @csrf
        @error('titulo')
        <div class="alert alert-danger" role="alert">
             Título es un Campo Obligatorio
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
        </div>
        @enderror
        @error('genero')
        <div class="alert alert-danger" role="alert">
             Género es un Campo Obligatorio
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
        </div>
        @enderror
        @error('actorPrincipal')
        <div class="alert alert-danger" role="alert">
             Actor Principal es un Campo Obligatorio
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
        </div>
        @enderror
        @error('actrizPrincipal')
        <div class="alert alert-danger" role="alert">
             Actriz Principal es un Campo Obligatorio
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
        </div>
        @enderror

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="titulo" placeholder="Título" value="{{$peliActualizada->titulo}}">
            </div>
            <div class="form-group">
                <label for="genero">Género</label>
                <input type="text" class="form-control" name="genero" placeholder="Género" value="{{$peliActualizada->genero}}">
            </div>
            <div class="form-group">
                <label for="actorPrincipal">Actor Principal</label>
                <input type="text" class="form-control" name="actorPrincipal" placeholder="Actor Principal" value="{{$peliActualizada->actorPrincipal}}">
            </div>
            <div class="form-group">
                <label for="actrizPrincipal">Actriz Principal</label>
                <input type="text" class="form-control" name="actrizPrincipal" placeholder="Actriz Principal" value="{{$peliActualizada->actrizPrincipal}}">
            </div>
            
            <button type="submit" class="btn btn-warning">Modificar</button>
        </form>
        
@endsection