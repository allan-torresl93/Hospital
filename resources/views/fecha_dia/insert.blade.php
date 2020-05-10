@extends('layout.layout')

@section('titulo')
    Nuevo Dia
@endsection

@section('contenido')
    <h1>Nuevo Dia</h1>
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
    <form action="{{route('fecha_dia.store')}} " method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Fecha:</label>
                <input type="date" class="form-control" name="fecha_f" placeholder="Fecha">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Paciente:</label>
                <select name="idPaciente" class="form-control">
                    @foreach ($pacientes as $paciente)
                        <option value="{{$paciente->id}}">{{$paciente->nombre_p}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Diagnostico:</label>
                <select name="idDiagnostico" class="form-control">
                    @foreach ($diagnosticos as $diagnostico)
                        <option value="{{$diagnostico->id}}">{{$diagnostico->tipo_d}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary">Crear Fecha</button>
        </div>
    </form>
    <br>
    <a href="{{route('fecha_dia.index')}}"><button class="btn btn-primary">Atras</button></a>
@endsection