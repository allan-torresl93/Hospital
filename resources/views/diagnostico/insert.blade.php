@extends('layout.layout')

@section('titulo')
    Nuevo Diagnostico
@endsection

@section('contenido')
    <h1>Nuevo Diagnostico</h1>
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
    <form action="{{route('diagnostico.store')}} " method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Codigo:</label>
                <input type="text" class="form-control" name="codigo_d" placeholder="Codigo">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Tipo:</label>
                <input type="text" class="form-control" name="tipo_d" placeholder="Tipo">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Complicaciones:</label>
                <input type="text" class="form-control" name="complicaciones_d" placeholder="Complicaciones">
            </div>
        </div>
        <div class="w-33">
            <div class="center">
                 <div class="form-row">
                   <button  type="submit" class="btn btn-primary">Crear Diagnostico</button>
                  </div>
            </div>
        </div>
    </form>
    <br>
    <a href="{{route('diagnostico.index')}}"><button class="btn btn-primary">Atras</button></a>
@endsection