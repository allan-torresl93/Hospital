@extends('layout.layout')

@section('titulo')
    Nuevo laboratorio
@endsection

@section('contenido')
    <h1>Nuevo laboratorio</h1>
    <br><br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <div class="header"><strong>.Ups.</strong> Algo anda mal...</div>
        <ul>
            @foreach ($errors->all() as $error)

            <li>{{$error}}</li>

            @endforeach
        </ul>
    </div>
    @endif
    <br><br>
    <form action="{{route('laboratorio.store')}} " method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Codigo:</label>
                <input type="text" class="form-control" name="codigo_l" placeholder="Codigo">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="nombre_l" placeholder="Nombre">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Direccion:</label>
                <input type="text" class="form-control" name="direccion_l" placeholder="Direccion">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Telefono:</label>
                <input type="text" class="form-control" name="telefono_l" placeholder="Telefono">
            </div>
        </div>
        <div class="w-33">
            <div class="center">
                 <div class="form-row">
                   <button  type="submit" class="btn btn-primary">Crear laboratorio</button>
                  </div>
            </div>
        </div>
    </form>
    <br>
    <a href="{{route('laboratorio.index')}}"><button class="btn btn-primary">Atras</button></a>
@endsection