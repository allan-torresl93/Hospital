@extends('layout.layout')

@section('titulo')
Detalle de Medico
@endsection

@section('contenido')
<h1 class="text-center" >Detalle del Medico</h1>
<br><br>

<div class="row">
    <div class="col-sm-3">
        <h3>Cedula: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$medico->cedula_m}}</p>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <h3>Nombre: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$medico->nombre_m}}</p>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-3">
        <h3>Especialidad: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$medico->especialidad_m}}</p>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-3">
        <h3>Hospital: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$medico->hospital}}</p>
    </div>
</div>
<br><br>

<div class="row">
<a href="{{route('medico.index')}}"><button class="btn btn-primary">Atras</button></a>
</div>

@endsection