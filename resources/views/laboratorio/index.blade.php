@extends('layout.layout')

@section('titulo')
     laboratorio
@endsection

@section('contenido')
<h1 class="text-center">laboratorio</h1>
<br><br>
@if ($consulta)
        <div class="alert alert-primary">
            <p>Los resultados de la bùsqueda <strong>{{$consulta}}</strong> son:</p>
        </div>
    @endif
@if ($message = Session::get('exito'))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif
<br><br>
<table class="table table-bordered">
     <thead>
          <tr>
               <th>Nombre</th>
               <th>Direccion</th>
               <th>Telefono</th>
          </tr>
     </thead>
     <tbody>
          @foreach ($laboratorios as $laboratorio)
          <tr>
          <td>{{$laboratorio->nombre_l}}</td>
          <td>{{$laboratorio->direccion_l}}</td>
          <td>{{$laboratorio->telefono_l}}</td>
          <td>
               <form action="{{route('laboratorio.destroy', $laboratorio->id)}}" method="post">
                    <a href="{{route('laboratorio.show', $laboratorio->id)}}" class="btn btn-info">Mas información</a>
                    <a href="{{route('laboratorio.edit', $laboratorio->id)}}" class="btn btn-primary">Editar</a>
                    
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
 
    {{$laboratorios->links()}}
<div class="row">
     <a href="{{route('laboratorio.create')}}"><button class="btn btn-success">Crear laboratorio</button></a>
</div>
@endsection