@extends('layout.layout')

@section('titulo')
    Nuevo Diagnostico
@endsection

@section('contenido')
    <h1>Nuevo Diagnostico</h1>
    <br><br>
<a href="{{route('diagnostico.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection