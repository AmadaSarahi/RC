@extends('layouts.plantilla')

@section('tittle','cursos')

@section('content')
    <h1>Bienvenido a la pagina principal de cursos :)</h1>

    <a href="{{route('cursos.create')}}">Crear curso</a>

    <ul>
        @foreach ($cursos as $curso)
        <li>
            <a href="{{route('cursos.show',$curso)}}">{{$curso->name}}</a>
        </li>
            
        @endforeach
    </ul>

    {{$cursos->links()}}


@endsection
    

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a la pagina principal de cursos :)</h1>
</body>
</html>
-->