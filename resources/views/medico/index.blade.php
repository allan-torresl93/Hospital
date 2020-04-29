@extends('layout.layout')

@section('titulo')
     Medicos
@endsection

@section('contenido')
<h1 class="text-center">Medicos</h1>
<br><br>
<a href="{{route('medico.create')}}"><button class="btn btn-success">Crear Medico</button></a>
@endsection