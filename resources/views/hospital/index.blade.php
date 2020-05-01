@extends('layout.layout')

@section('titulo')
     Hospital
@endsection

@section('contenido')
<h1 class="text-center">Hospital</h1>
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
               <th>Cantidad De Camas</th>
          </tr>
     </thead>
     <tbody>
          @foreach ($hospitals as $hospital)
          <tr>
          <td>{{$hospital->nombre_h}}</td>
          <td>{{$hospital->direccion_h}}</td>
          <td>{{$hospital->telefono_h}}</td>
          <td>{{$hospital->cantidad_camas_h}}</td>
          <td>
               <form action="{{route('hospital.destroy', $hospital->id)}}" method="post">
                    <a href="{{route('hospital.show', $hospital->id)}}" class="btn btn-info">Mas información</a>
                    <a href="{{route('hospital.edit', $hospital->id)}}" class="btn btn-primary">Editar</a>
                    
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
 
    {{$hospitals->links()}}
<div class="row">
     <a href="{{route('hospital.create')}}"><button class="btn btn-success">Crear Hospital</button></a>
</div>
@endsection