@extends('layout.layout')

@section('titulo')
    Nuevo Detalle
@endsection

@section('contenido')
    <h1>Nuevo Detalle</h1>
    <br><br>
<a href="{{route('detalle.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection