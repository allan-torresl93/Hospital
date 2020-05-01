@extends('layout.layout')

@section('titulo')
    Nuevo Laboratorio
@endsection

@section('contenido')
    <h1>Nuevo Laboratorio</h1>
    <br><br>
<a href="{{route('laboratorio.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection