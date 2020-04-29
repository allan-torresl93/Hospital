@extends('layout.layout')

@section('titulo')
     Fecha_Dias
@endsection

@section('contenido')
<h1 class="text-center">Fecha_Dias</h1>
<br><br>
<a href="{{route('fecha_dia.create')}}"><button class="btn btn-success">Crear Fecha_Dia</button></a>
@endsection