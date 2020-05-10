@extends('layout.layout')

@section('titulo')
    Nuevo Medico
@endsection

@section('contenido')
    <h1>Nuevo Medico</h1>
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
    <form action="{{route('medico.store')}} " method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cedula:</label>
                <input type="number" class="form-control" name="cedula_m" placeholder="Cedula">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="nombre_m" placeholder="Nombre">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Especialidad:</label>
                <input type="text" class="form-control" name="especialidad_m" placeholder="Especialidad">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Hospital:</label>
                <select name="idHospital" class="form-control">
                    @foreach ($hospitals as $hospital)
                        <option value="{{$hospital->id}}">{{$hospital->nombre_h}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="w-33">
            <div class="center">
                 <div class="form-row">
                   <button  type="submit" class="btn btn-primary">Crear Medico</button>
                  </div>
            </div>
        </div>
    </form>
    <br>
    <a href="{{route('medico.index')}}"><button class="btn btn-primary">Atras</button></a>
@endsection