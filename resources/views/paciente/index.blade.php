@extends('layout.layout')

@section('titulo')
     Pacientes
@endsection

@section('contenido')
<h1 class="text-center">Pacientes</h1>
<br><br>
<a href="{{route('paciente.create')}}"><button class="btn btn-success">Crear Paciente</button></a>
@endsection