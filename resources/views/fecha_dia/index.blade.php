@extends('layout.layout')

@section('titulo')
     Fecha
@endsection

@section('contenido')
<h1 class="text-center">Fecha</h1>
<br><br>

@if ($message = Session::get('exito'))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif
<br><br>
<table class="table table-bordered">
     <thead>
          <tr>
               <th>Fecha</th>
               
          </tr>
     </thead>
     <tbody>
          @foreach ($fecha_dias as $fecha_dia)
          <tr>
          <td>{{$fecha_dia->fecha_f}}</td>
         
          <td>
               <form action="{{route('fecha_dia.destroy', $fecha_dia->id)}}" method="post">
                    <a href="{{route('fecha_dia.show', $fecha_dia->id)}}" class="btn btn-info">Mas información</a>
                    <a href="{{route('fecha_dia.edit', $fecha_dia->id)}}" class="btn btn-primary">Editar</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    
                </form>
          </td>
          </tr>              
          @endforeach
     </tbody>
</table>
<br>
 
<div class="row">
     <a href="{{route('fecha_dia.create')}}"><button class="btn btn-success">Crear Fecha</button></a>
</div>
@endsection