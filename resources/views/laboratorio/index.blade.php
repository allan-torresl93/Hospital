@extends('layout.layout')

@section('titulo')
     Laboratorios
@endsection

@section('contenido')
<h1 class="text-center">Laboratorios</h1>
<br><br>
<a href="{{route('laboratorio.create')}}"><button class="btn btn-success">Crear Laboratorio</button></a>
@endsection