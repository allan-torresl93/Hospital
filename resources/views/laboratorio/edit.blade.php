@extends('layout.layout')
 
@section('titulo', 'Modificar Laboratorio')
 
@section('contenido')
<h1 class="text-center">Modificar Laboratorio</h1>
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
 
        <form action="{{route('laboratorio.update', $laboratorio->id)}} " method="post">
            @csrf
            @method('PUT')
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Codigo:</label>
                    <input type="text" class="form-control" name="codigo_l" value="{{$laboratorio->codigo_l}}">
                </div>
            </div>
 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="nombre_l" value="{{$laboratorio->nombre_l}}">
                </div>
            </div>
 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Direccion:</label>
                    <input type="text" class="form-control" name="direccion_l" value="{{$laboratorio->direccion_l}}">
                </div>
            </div>
 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Telefono:</label>
                    <input type="number" class="form-control" name="telefono_l" value="{{$laboratorio->telefono_l}}">
                </div>
            </div>
            
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Modificar laboratorio</button>
            </div> 
        </form>
        <br>
        <div class="form-row">
            <a href=" {{route('laboratorio.index')}}"><button class="btn btn-primary">Atras</button></a>
        </div>
@endsection