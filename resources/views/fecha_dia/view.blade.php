@extends('layout.layout')

@section('titulo')
Fecha
@endsection

@section('contenido')
<h1 class="text-center" >Fecha</h1>
<br><br>

<div class="row">
    <div class="col-sm-3">
        <h3>Fecha: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$fecha_dia->fecha_f}}</p>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <h3>Paciente: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$fecha_dia->paciente}}</p>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <h3>Diagnostico: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$fecha_dia->diagnostico}}</p>
    </div>
</div>

<br><br>

<div class="row">
<a href="{{route('fecha_dia.index')}}"><button class="btn btn-primary">Atras</button></a>
</div>

@endsection