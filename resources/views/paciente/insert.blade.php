@extends('layout.layout')

@section('titulo')
    Nuevo Paciente
@endsection

@section('contenido')
    <h1>Nuevo Paciente</h1>
    <br><br>
<a href="{{route('paciente.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection