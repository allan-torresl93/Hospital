@extends('layout.layout')

@section('titulo')
     Detalle
@endsection

@section('contenido')
<h1 class="text-center">Detalle</h1>
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
               <th>Descricion</th>
               <th>Fecha</th>
               
          </tr>
     </thead>
     <tbody>
          @foreach ($detalles as $detalle)
          <tr>
          <td>{{$detalle->descripcion_de}}</td>
          <td>{{$detalle->fecha_de}}</td>
         
          <td>
               <form action="{{route('detalle.destroy', $detalle->id)}}" method="post">
                    <a href="{{route('detalle.show', $detalle->id)}}" class="btn btn-info">Mas información</a>
                    <a href="{{route('detalle.edit', $detalle->id)}}" class="btn btn-primary">Editar</a>
                    
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
     <a href="{{route('detalle.create')}}"><button class="btn btn-success">Crear Detalle</button></a>
</div>
@endsection