@extends('layout.layout')
 
@section('titulo', 'Modificar Fecha')
 
@section('contenido')
<h1 class="text-center">Modificar Fecha</h1>
<br><br>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <div class="header"> <strong>Ups. </strong>Algo anda mal...</div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<br><br>
 
        <form action="{{route('fecha_dia.update', $fecha_dia->id)}} " method="post">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Fecha:</label>
                    <input type="date" class="form-control" name="fecha_f" value="{{$fecha_dia->fecha_f}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Paciente:</label>
                    <select name="idPaciente" class="form-control">
                        @foreach ($pacientes as $paciente)
                            <option value="{{$paciente->id}}"
                                @if ($fecha_dia->idPaciente == $paciente->id)
                                    selected                                    
                                @endif>
                                
                            {{$paciente->nombre_p}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Diagnostico:</label>
                    <select name="idDiagnostico" class="form-control">
                        @foreach ($diagnosticos as $diagnostico)
                            <option value="{{$diagnostico->id}}"
                                @if ($fecha_dia->idDiagnostico == $diagnostico->id)
                                    selected                                    
                                @endif>
                                
                            {{$diagnostico->tipo_d}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
 
            
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Modificar Fecha</button>
            </div>
 
        </form>
        <br>
        <div class="form-row">
            <a href=" {{route('fecha_dia.index')}}"><button class="btn btn-primary">Atras</button></a>
        </div>
@endsection