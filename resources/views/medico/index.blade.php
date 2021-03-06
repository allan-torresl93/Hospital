@extends('layout.layout')

@section('titulo')
     Medico
@endsection

@section('contenido')
<h1 class="text-center">Medico</h1>
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
               <th>Especialidad</th>
          </tr>
     </thead>
     <tbody>
          @foreach ($medicos as $medico)
          <tr>
          <td>{{$medico->nombre_m}}</td>
          <td>{{$medico->especialidad_m}}</td>
          <td>
               <form action="{{route('medico.destroy', $medico->id)}}" method="post">
                    <a href="{{route('medico.show', $medico->id)}}" class="btn btn-info">Mas información</a>
                    <a href="{{route('medico.edit', $medico->id)}}" class="btn btn-primary">Editar</a>
                    
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
 
    {{$medicos->links()}}
<div class="row">
     <a href="{{route('medico.create')}}"><button class="btn btn-success">Crear Medico</button></a>
</div>
@endsection