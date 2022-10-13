@extends('layouts.plantilla')

@section('tittle','cursos edit')

@section('content')
    <h1>En esta pagina podras editar un curso</h1>

    <form action="{{route('cursos.update',$curso)}}" method="POST">
        
        @csrf
        @method('put')

        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>

        @error('name')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripcion:
            <textarea name="descripcion" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

    <br>
        <label>
            Categoria:
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <button>Actualizar Formulario</button>
    </form>

@endsection