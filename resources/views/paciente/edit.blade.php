@extends('layout.layout')
 
@section('titulo', 'Modificar Paciente')
 
@section('contenido')
<h1 class="text-center">Modificar Paciente</h1>
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
 
        <form action="{{route('paciente.update', $paciente->id)}} " method="post">
            @csrf
            @method('PUT')
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Cedula:</label>
                    <input type="number" class="form-control" name="cedula_paciente" value="{{$paciente->cedula_paciente}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Numero De Registro:</label>
                    <input type="number" class="form-control" name="numero_registro_p" value="{{$paciente->numero_registro_p}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Numero De Cama:</label>
                    <input type="number" class="form-control" name="numero_cama_p" value="{{$paciente->numero_cama_p}}">
                </div>
            </div>
 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="nombre_p" value="{{$paciente->nombre_p}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Direccion:</label>
                    <input type="text" class="form-control" name="direccion_p" value="{{$paciente->direccion_p}}">
                </div>
            </div>
 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Fecha De Nacimiento:</label>
                    <input type="date" class="form-control" name="fecha_nacimiento_p" value="{{$paciente->fecha_nacimiento_p}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Sexo:</label>
                    <input type="text" class="form-control" name="sexo_p" value="{{$paciente->sexo_p}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Sala:</label>
                    <select name="idSala" class="form-control">
                        @foreach ($salas as $sala)
                            <option value="{{$sala->id}}"
                                @if ($sala->idSala == $sala->id)
                                    selected                                    
                                @endif>
                                
                            {{$sala->nombre_s}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Modificar Paciente</button>
            </div>
 
        </form>
        <br>
        <div class="form-row">
            <a href=" {{route('paciente.index')}}"><button class="btn btn-primary">Atras</button></a>
        </div>
@endsection