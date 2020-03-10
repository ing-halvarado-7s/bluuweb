@extends('contenidoDinamico/plantilla')

@section('contenido')
        @if (session('mensaje'))
        <div class="alert alert-success" role="alert">
            {{ session('mensaje') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
        </div>  

        @endif
    
        <h1>Notas</h1>
        <form action="{{route('notas.crear')}}" method="POST">
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

            <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre"  value="{{old('nombre')}}">
            <input type="text" name="descripcion" class="form-control mb-2" placeholder="Descripción" value="{{old('descripcion')}}">
            <button type="submit" class="btn btn-primary btn-block">Agregar</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notas as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                <td><a href="{{route('notas.detalle',$item)}}">{{$item->nombre}}</a></td>
                    <td>{{$item->descripcion}}</td>
                <td>
                    <a href="{{route('notas.editar',$item)}}" class="btn btn-warning btn-sm">Editar</a>
                <form class="d-inline" action="{{route('notas.eliminar',$item)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                    </form>
                </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
        {{$notas->links()}}
@endsection
