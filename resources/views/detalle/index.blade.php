@extends('layout.layout')

@section('titulo')
     Detalles
@endsection

@section('contenido')
<h1 class="text-center">Detalles</h1>
<br><br>
<a href="{{route('detalle.create')}}"><button class="btn btn-success">Crear Detalle</button></a>
@endsection