@extends('layout.layout')

@section('titulo')
Detalle de la Sala
@endsection

@section('contenido')
<h1 class="text-center" >Detalle de la Sala</h1>
<br><br>

<div class="row">
    <div class="col-sm-3">
        <h3>Codigo: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$sala->codigo_s}}</p>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <h3>Nombre: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$sala->nombre_s}}</p>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-3">
        <h3>Cantidad De Camas: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$sala->cantidad_camas_s}}</p>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-3">
        <h3>Hospital: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$sala->hospital}}</p>
    </div>
</div>
<br><br>

<div class="row">
<a href="{{route('sala.index')}}"><button class="btn btn-primary">Atras</button></a>
</div>

@endsection