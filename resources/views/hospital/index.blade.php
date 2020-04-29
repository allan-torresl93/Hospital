@extends('layout.layout')

@section('titulo')
     Hospitales
@endsection

@section('contenido')
<h1 class="text-center">Hospitales</h1>
<br><br>
<a href="{{route('hospital.create')}}"><button class="btn btn-success">Crear Hospital</button></a>
@endsection