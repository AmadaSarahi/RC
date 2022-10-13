@extends('layouts.plantilla')

@section('tittle','Contactanos')

@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label for="">Nombre: </label><br>
        <input type="text" name="name">
        <br>
        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror


        <label for="">Correo: </label><br>
        <input type="text" name="correo">
        <br>
        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror


        <label for="">Mensaje: </label><br>
        <textarea name="mensaje" rows="4"></textarea>
        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <br>
        <button type="submit">Enviar Mensaje</button>
    </form>


    @if (session('info'))
    <script>
        alert("{{session('info')}}");
    </script>
        
    @endif

@endsection