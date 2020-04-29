@extends('layout.layout')

@section('titulo')
    Nueva Consulta
@endsection

@section('contenido')
    <h1>Nueva Consulta</h1>
    <br><br>
<a href="{{route('consulta.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection