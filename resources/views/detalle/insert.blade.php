@extends('layout.layout')

@section('titulo')
    Nuevo Detalle
@endsection

@section('contenido')
    <h1>Nuevo Detalle</h1>
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
    <form action="{{route('detalle.store')}} " method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Descricion:</label>
                <input type="text" class="form-control" name="descripcion_de" placeholder="Descripcion">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Fecha:</label>
                <input type="date" class="form-control" name="fecha_de" placeholder="Fecha">
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

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Laboratorio:</label>
                <select name="idLaboratorio" class="form-control">
                    @foreach ($laboratorios as $laboratorio)
                        <option value="{{$laboratorio->id}}">{{$laboratorio->nombre_l}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary">Crear Detalle</button>
        </div>
    </form>
    <br>
    <a href="{{route('detalle.index')}}"><button class="btn btn-primary">Atras</button></a>
@endsection