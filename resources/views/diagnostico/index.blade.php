@extends('layout.layout')

@section('titulo')
     Diagnostico
@endsection

@section('contenido')
<h1 class="text-center">Diagnostico</h1>
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
               <th>Codigo</th>
               <th>Tipo</th>
          </tr>
     </thead>
     <tbody>
          @foreach ($diagnosticos as $diagnostico)
          <tr>
          <td>{{$diagnostico->codigo_d}}</td>
          <td>{{$diagnostico->tipo_d}}</td>
          <td>
               <form action="{{route('diagnostico.destroy', $diagnostico->id)}}" method="post">
                    <a href="{{route('diagnostico.show', $diagnostico->id)}}" class="btn btn-info">Mas información</a>
                    <a href="{{route('diagnostico.edit', $diagnostico->id)}}" class="btn btn-primary">Editar</a>
                    
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
 
    {{$diagnosticos->links()}}
<div class="row">
     <a href="{{route('diagnostico.create')}}"><button class="btn btn-success">Crear Diagnostico</button></a>
</div>
@endsection