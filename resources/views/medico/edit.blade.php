@extends('layout.layout')
 
@section('titulo', 'Modificar Medico')
 
@section('contenido')
<h1 class="text-center">Modificar Medico</h1>
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
 
        <form action="{{route('medico.update', $medico->id)}} " method="post">
            @csrf
            @method('PUT')
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Cedula:</label>
                    <input type="text" class="form-control" name="cedula_m" value="{{$medico->cedula_m}}">
                </div>
            </div>
 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="nombre_m" value="{{$medico->nombre_m}}">
                </div>
            </div>
 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Especialidad:</label>
                    <input type="text" class="form-control" name="especialidad_m" value="{{$medico->especialidad_m}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Hospital:</label>
                    <select name="idHospital" class="form-control">
                        @foreach ($hospitals as $hospital)
                            <option value="{{$hospital->id}}"
                                @if ($medico->idHospital == $hospital->id)
                                    selected                                    
                                @endif>
                                
                            {{$hospital->nombre_h}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Modificar medico</button>
            </div>
 
        </form>
        <br>
        <div class="form-row">
            <a href=" {{route('medico.index')}}"><button class="btn btn-primary">Atras</button></a>
        </div>
@endsection