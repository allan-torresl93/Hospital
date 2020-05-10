@extends('layout.layout')
 
@section('titulo', 'Modificar Sala')
 
@section('contenido')
<h1 class="text-center">Modificar Sala</h1>
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
 
        <form action="{{route('sala.update', $sala->id)}} " method="post">
            @csrf
            @method('PUT')
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Codigo:</label>
                    <input type="text" class="form-control" name="codigo_s" value="{{$sala->codigo_s}}">
                </div>
            </div>
 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="nombre_s" value="{{$sala->nombre_s}}">
                </div>
            </div>
 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Cantidad De Camas:</label>
                    <input type="text" class="form-control" name="cantidad_camas_s" value="{{$sala->cantidad_camas_s}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Hospital:</label>
                    <select name="idHospital" class="form-control">
                        @foreach ($hospitals as $hospital)
                            <option value="{{$hospital->id}}"
                                @if ($sala->idHospital == $hospital->id)
                                    selected                                    
                                @endif>
                                
                            {{$hospital->nombre_h}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Modificar Sala</button>
            </div>
 
        </form>
        <br>
        <div class="form-row">
            <a href=" {{route('sala.index')}}"><button class="btn btn-primary">Atras</button></a>
        </div>
@endsection