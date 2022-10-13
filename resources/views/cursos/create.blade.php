@extends('layouts.plantilla')

@section('tittle','cursos create')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">
        
        @csrf

        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripcion:
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

    <br>
        <label>
            Categoria:
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error('categoria')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <button>Enviar Formulario</button>
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
    <h1>En esta pagina podras crear un curso</h1>
</body>
</html>
-->