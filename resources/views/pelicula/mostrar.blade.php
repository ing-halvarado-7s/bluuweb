@extends('plantilla.plantilla')

@section('contenido')

        <h1>Consultar Película</h1>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Tipo</th>
            <th scope="col">Actor Principal</th>
            <th scope="col">Actriz Principal</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <th scope="row">{{$peli->id}}</th>
                <td><a href="{{route('pelicula.mostrar')}}">{{$peli->titulo}}</a></td>
                <td>{{$peli->tipo}}</td>
                <td>{{$peli->actorPrincipal}}</td>
                <td>{{$peli->actrizPrincipal}}</td>
                <td>Acciones</td>
            </tr>
            
        </tbody>
        </table>
        {{$peliculas->links()}}
    
@endsection