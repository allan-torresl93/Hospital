@extends('layout.layout')

@section('titulo')
    Nueva Sala
@endsection

@section('contenido')
    <h1>Nueva Sala</h1>
    <br><br>
<a href="{{route('sala.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection