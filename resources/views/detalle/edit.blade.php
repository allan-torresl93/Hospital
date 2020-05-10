@extends('layout.layout')
 
@section('titulo', 'Modificar Detalle')
 
@section('contenido')
<h1 class="text-center">Modificar Detalle</h1>
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
 
        <form action="{{route('detalle.update', $detalle->id)}} " method="post">
            @csrf
            @method('PUT')
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Descripcion:</label>
                    <input type="text" class="form-control" name="descripcion_de" value="{{$detalle->descripcion_de}}">
                </div>
            </div>
 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Fecha:</label>
                    <input type="date" class="form-control" name="fecha_de" value="{{$detalle->fecha_de}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Hospital:</label>
                    <select name="idHospital" class="form-control">
                        @foreach ($hospitals as $hospital)
                            <option value="{{$hospital->id}}"
                                @if ($detalle->idHospital == $hospital->id)
                                    selected                                    
                                @endif>
                                
                            {{$hospital->nombre_h}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Laboratorio:</label>
                    <select name="idLaboratorio" class="form-control">
                        @foreach ($laboratorios as $laboratorio)
                            <option value="{{$laboratorio->id}}"
                                @if ($detalle->idLaboratorio == $laboratorio->id)
                                    selected                                    
                                @endif>
                                
                            {{$laboratorio->nombre_l}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
 
            
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Modificar Detalle</button>
            </div>
 
        </form>
        <br>
        <div class="form-row">
            <a href=" {{route('detalle.index')}}"><button class="btn btn-primary">Atras</button></a>
        </div>
@endsection