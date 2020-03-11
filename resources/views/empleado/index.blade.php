@extends('plantilla.plantilla')

@section('contenido')
    <h1>Listado empleado</h1>

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
                        <form action="{{ route('empleadoDetalle',$item->id) }}">
                            <button type="submit" class="btn btn-success btn-sm">Detalle</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection