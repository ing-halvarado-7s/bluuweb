@extends('plantilla.plantilla')

@section('contenido')
        @if (session('mensajeI'))
            <div class="alert alert-success" role="alert">
                {{ session('mensajeI') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            </div>  
        @elseif(session('mensajeM'))
        <div class="alert alert-warning" role="alert">
            {{ session('mensajeM') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
        </div> 
        @elseif(session('mensajeE'))
        <div class="alert alert-info" role="alert">
            {{ session('mensajeE') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
        </div> 
        @endif
        
        <h1>Listado de Películas</h1>
        <form  class="d-inline" action="{{route('pVistaIncluir')}}" method="GET">
            <button type="submit" class="btn btn-primary float-md-right">Incluir</button>
        </form>
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
                <td>
                    <a href="{{route('pVistaModificar',$peli)}}" class="btn btn-warning btn-sm">Modificar</a>
                    <form action="{{route('pEliminar',$peli)}}" method="post" class="d-inline" >
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        {{$peliculas->links()}}
    
@endsection