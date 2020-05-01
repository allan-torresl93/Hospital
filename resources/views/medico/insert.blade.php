@extends('layout.layout')

@section('titulo')
    Nuevo Medico
@endsection

@section('contenido')
    <h1>Nuevo Medico</h1>
    <br><br>
<a href="{{route('medico.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection