@extends('layout.layout')

@section('titulo')
    Nueva Fecha y Dia
@endsection

@section('contenido')
    <h1>Nueva Fecha y Dia</h1>
    <br><br>
<a href="{{route('fecha_dia.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection