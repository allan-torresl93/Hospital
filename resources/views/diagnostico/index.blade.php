@extends('layout.layout')

@section('titulo')
     Diagnosticos
@endsection

@section('contenido')
<h1 class="text-center">Diagnosticos</h1>
<br><br>
<a href="{{route('diagnostico.create')}}"><button class="btn btn-success">Crear Diagnostico</button></a>
@endsection