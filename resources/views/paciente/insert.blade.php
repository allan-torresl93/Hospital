@extends('layout.layout')

@section('titulo')
    Nuevo Panciente
@endsection

@section('contenido')
    <h1>Nuevo Panciente</h1>
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
    <form action="{{route('paciente.store')}} " method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cedula:</label>
                <input type="number" class="form-control" name="cedula_paciente" placeholder="Cedula">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Numero De Registro:</label>
                <input type="number" class="form-control" name="numero_registro_p" placeholder="Numero De Registro">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Numero De Cama:</label>
                <input type="number" class="form-control" name="numero_cama_p" placeholder="Numero De Cama">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="nombre_p" placeholder="Nombre">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Direccion:</label>
                <input type="text" class="form-control" name="direccion_p" placeholder="Direccion">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Fecha De Nacimiento:</label>
                <input type="date" class="form-control" name="fecha_nacimiento_p" placeholder="Fecha De Nacimiento">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Sexo:</label>
                <input type="text" class="form-control" name="sexo_p" placeholder="Sexo">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Sala:</label>
                <select name="idSala" class="form-control">
                    @foreach ($salas as $sala)
                        <option value="{{$sala->id}}">{{$sala->nombre_s}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="w-33">
            <div class="center">
                 <div class="form-row">
                   <button  type="submit" class="btn btn-primary">Crear Paciente</button>
                  </div>
            </div>
        </div>
    </form>
    <br>
    <a href="{{route('paciente.index')}}"><button class="btn btn-primary">Atras</button></a>
@endsection