@extends('contenidoDinamico/plantilla')

@section('contenido')
        @if (session('mensaje'))
        <div class="alert alert-success" role="alert">
            {{ session('mensaje') }}
        </div>  

        @endif
    
        <h1>Notas</h1>
        <form action="{{route('notas.crear')}}" method="POST">
            @csrf
            @error ('nombre')
                <div class="alert alert-danger" role="alert">
                    Nombre es un Campo Obligatorio
                </div>  
            @enderror
            @error ('descripcion')
                <div class="alert alert-danger" role="alert">
                    Descripción es un Campo Obligatorio
                </div>  
            @enderror

            <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre">
            <input type="text" name="descripcion" class="form-control mb-2" placeholder="Descripción">
            <button type="submit" class="btn btn-primary btn-block">Agregar</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Funciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notas as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                <td><a href="{{route('notas.detalle',$item)}}">{{$item->nombre}}</a></td>
                    <td>{{$item->descripcion}}</td>
                    <td> F1</td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    
@endsection
