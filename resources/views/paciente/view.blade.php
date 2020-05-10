@extends('layout.layout')

@section('titulo')
Detalle Del Paciente
@endsection

@section('contenido')
<h1 class="text-center" >Detalle Del Paciente</h1>
<br><br>

<div class="row">
    <div class="col-sm-3">
        <h3>Cedula: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$paciente->cedula_paciente}}</p>
    </div>
</div>
<br>

<div class="row">
    <div class="col-sm-3">
        <h3>Numero De Registro: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$paciente->numero_registro_p}}</p>
    </div>
</div>
<br>

<div class="row">
    <div class="col-sm-3">
        <h3>Numero De Cama: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$paciente->numero_cama_p}}</p>
    </div>
</div>
<br>

<div class="row">
    <div class="col-sm-3">
        <h3>Nombre: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$paciente->nombre_p}}</p>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-3">
        <h3>Direccion: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$paciente->direccion_p}}</p>
    </div>
</div>
<br>

<div class="row">
    <div class="col-sm-3">
        <h3>Fecha De Nacimiento: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$paciente->fecha_nacimiento_p}}</p>
    </div>
</div>
<br>

<div class="row">
    <div class="col-sm-3">
        <h3>Sexo: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$paciente->sexo_p}}</p>
    </div>
</div>
<br>

<div class="row">
    <div class="col-sm-3">
        <h3>Sala: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$paciente->sala}}</p>
    </div>
</div>
<br><br>

<div class="row">
<a href="{{route('paciente.index')}}"><button class="btn btn-primary">Atras</button></a>
</div>

@endsection