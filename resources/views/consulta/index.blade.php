@extends('layout.layout')

@section('titulo')
     Consultas
@endsection

@section('contenido')
    <h1 class="text-center">Consultas</h1>
    <br><br>
<a href="{{route('consulta.create')}}"><button class="btn btn-success">Crear consulta</button></a>
@endsection