@extends('layouts.plantilla')

@section('tittle','cursos '.$curso->name)

@section('content')
    <h1>Bienvenido al curso:{{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit',$curso)}}">Editar Curso</a>
    
    <p><strong>Categoria:</strong>{{$curso->categoria}}</p>
    <p>{{$curso->descripcion}}</p>

    <form action="{{route('cursos.destroy',$curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>

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
    <h1>Bienvenido al curso:<?php //echo $curso;?></h1>
</body>
</html>
-->