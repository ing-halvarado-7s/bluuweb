@extends('contenidoDinamico/plantilla')

@section('contenido')
    Mi familia con la que vivo <br>
    @foreach ($familia as $item)
        <a href="{{route('nosotros',$item)}}" class="">{{$item}}</a><br>
    @endforeach
    @if (!empty($nombre))
        @switch($nombre)
            @case($nombre=='Rafael')
                <h2>El nombre es: {{$nombre}}</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum repudiandae sit aut iste distinctio consectetur, quibusdam, amet eos deleniti quod quas? Doloremque error ipsum assumenda sequi dolorem unde corporis
                </p>
            @break
            @case($nombre=='Marina')
                <h2>El nombre es: {{$nombre}}</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum repudiandae sit aut iste distinctio consectetur, quibusdam, amet eos deleniti quod quas? Doloremque error ipsum assumenda sequi dolorem unde corporis
                </p>
            @break
            @case($nombre=='Carlos')
                <h2>El nombre es: {{$nombre}}</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum repudiandae sit aut iste distinctio consectetur, quibusdam, amet eos deleniti quod quas? Doloremque error ipsum assumenda sequi dolorem unde corporis
                    </p>
            @break
            @case($nombre=='Heimys')
                <h2>El nombre es: {{$nombre}}</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum repudiandae sit aut iste distinctio consectetur, quibusdam, amet eos deleniti quod quas? Doloremque error ipsum assumenda sequi dolorem unde corporis
                </p>
            @break
            @default
                <h2>El nombre es: {{$nombre}}</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum repudiandae sit aut iste distinctio consectetur, quibusdam, amet eos deleniti quod quas? Doloremque error ipsum assumenda sequi dolorem unde corporis
                </p>
        @endswitch
    @endif
@endsection