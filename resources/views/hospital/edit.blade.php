@extends('layout.layout')
 
@section('titulo', 'Modificar Hospital')
 
@section('contenido')
<h1 class="text-center">Modificar Hospital</h1>
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
 
        <form action="{{route('hospital.update', $hospital->id)}} " method="post">
            @csrf
            @method('PUT')
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Codigo del Hospital:</label>
                    <input type="text" class="form-control" name="codigo_h" value="{{$hospital->codigo_h}}">
                </div>
            </div>
 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre del Hospital:</label>
                    <input type="text" class="form-control" name="nombre_h" value="{{$hospital->nombre_h}}">
                </div>
            </div>
 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Direccion del Hospital:</label>
                    <input type="text" class="form-control" name="direccion_h" value="{{$hospital->direccion_h}}">
                </div>
            </div>
 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Telefono del hospital:</label>
                    <input type="number" class="form-control" name="telefono_h" value="{{$hospital->telefono_h}}">
                </div>
            </div>
 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Cantidad de Camas del hospital:</label>
                    <input type="number" class="form-control" name="cantidad_camas_h" value="{{$hospital->cantidad_camas_h}}">
                </div>
            </div>
            
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Modificar hospital</button>
            </div> 
        </form>
        <br>
        <div class="form-row">
            <a href=" {{route('hospital.index')}}"><button class="btn btn-primary">Atras</button></a>
        </div>
@endsection