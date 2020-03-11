@extends('plantilla.plantilla')

@section('contenido')
    @if (session('mensajeI'))
    <div class="alert alert-primary" role="alert">
        {{session('mensajeI')}}
       <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
   </div>
   @elseif (session('mensajeM'))
   <div class="alert alert-warning" role="alert">
       {{session('mensajeM')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
  </div>
  @elseif (session('mensajeE'))
    <div class="alert alert-danger" role="alert">
        {{session('mensajeE')}}
       <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
   </div>
        
    @endif
    <h1>Listado empleado</h1>
    <form action="{{route('empleadoVistaIncluir')}}">
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
    <table class="table">
        
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cédula</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Aciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $item)    
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->cedula}}</td>
                    <td>{{$item->nombreCompleto}}</td>
                    <td>
                        <form action="{{ route('empleadoDetalle',$item->id) }}" class="d-inline" >
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Detalle</button>
                        </form>
                        <form action="{{ route('empleadoVistaModificar',$item) }}" class="d-inline" method="GET" >
                            @csrf
                            <button type="submit" class="btn btn-warning btn-sm">Modificar</button>
                        </form>
                        <form action="{{ route('empleadoEliminar',$item) }}" class="d-inline" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      {{$empleados->links()}}
@endsection