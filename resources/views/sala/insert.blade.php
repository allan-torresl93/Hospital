@extends('layout.layout')

@section('titulo')
    Nueva Sala
@endsection

@section('contenido')
    <h1>Nueva Sala</h1>
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
    <form action="{{route('sala.store')}} " method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Codigo:</label>
                <input type="number" class="form-control" name="codigo_s" placeholder="Codigo">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="nombre_s" placeholder="Nombre">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cantidad De Camas:</label>
                <input type="text" class="form-control" name="cantidad_camas_s" placeholder="Cantidad De Camas">
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
                   <button  type="submit" class="btn btn-primary">Crear Sala</button>
                  </div>
            </div>
        </div>
    </form>
    <br>
    <a href="{{route('sala.index')}}"><button class="btn btn-primary">Atras</button></a>
@endsection