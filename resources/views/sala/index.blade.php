@extends('layout.layout')

@section('titulo')
     Salas
@endsection

@section('contenido')
<h1 class="text-center">Salas</h1>
<br><br>
<a href="{{route('sala.create')}}"><button class="btn btn-success">Crear Sala</button></a>
@endsection