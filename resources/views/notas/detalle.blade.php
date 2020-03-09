@extends('contenidoDinamico/plantilla')

@section('contenido')
    <h1>Detalle de Nota</h1>
    <h4>Id: {{$notas->id}}</h4>
    <h4>Nombre: {{$notas->nombre}}</h4>
    <h4>Descripción: {{$notas->descripcion}}</h4>
@endsection