@extends('plantilla.plantilla')

@section('contenido')

        <h1>Listado de Películas</h1>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Género</th>
            <th scope="col">Actor Principal</th>
            <th scope="col">Actriz Principal</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peliculas as $peli)
            <tr>
                <th scope="row">{{$peli->id}}</th>
                <td><a href="{{route('pmostrar',$peli)}}">{{$peli->titulo}}</a></td>
                <td>{{$peli->genero}}</td>
                <td>{{$peli->actorPrincipal}}</td>
                <td>{{$peli->actrizPrincipal}}</td>
                <td>Acciones</td>
            </tr>
            @endforeach
        </tbody>
        </table>
        {{$peliculas->links()}}
    
@endsection