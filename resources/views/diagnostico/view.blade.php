@extends('layout.layout')

@section('titulo')
Detalle del Diagnostico
@endsection

@section('contenido')
<h1 class="text-center" >Detalle dell Diagnostico</h1>
<br><br>

<div class="row">
    <div class="col-sm-3">
        <h3>Codigo: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$diagnostico->codigo_d}}</p>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <h3>Tipo: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$diagnostico->tipo_d}}</p>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-3">
        <h3>Complicaciones: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$diagnostico->complicaciones_d}}</p>
    </div>
</div>
<br><br>

<div class="row">
<a href="{{route('diagnostico.index')}}"><button class="btn btn-primary">Atras</button></a>
</div>

@endsection