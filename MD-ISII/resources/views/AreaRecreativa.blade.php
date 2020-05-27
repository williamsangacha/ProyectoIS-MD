@extends('layouts.crud')

@section('title', 'Team')

@section('titulo','Ministerio de Deportes')

@section('Objeto', 'Areas')


@section('botones')
    <a class="btn btn-primary" href="{{route('areas.create')}}" role="button">Agregar</a>
    <a class="btn btn-secondary" href="/" role="button">Regresar</a>
@stop


@section('contenido')
<div class="table-responsive-sm">
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Encargado</th>
    <th>Area</th>
    <th>Descripcion</th>
    <th>Aforo</th>
    <th colspan="2" class="text-center">Opciones</th>
    
  </thead>
  <tbody>
    @foreach($areas as $areas)  
    <tr>             
      <td>{{$areas->areacodigo}}</td>
      <td>{{$areas->encid}}</td>
      <td>{{$areas->areanombre}}</td>
      <td>{{$areas->areadesc}}</td>
      <td>{{$areas->areaaforo}}</td>
      <td class="text-right"><a class="btn btn-primary btn-xs" href="{{route('areas.edit',$areas->areacodigo)}}">Editar</a></td>
      <td>
        <form method="POST" action="{{route('areas.destroy',$areas->areacodigo)}}">
        @method('DELETE')
        @csrf
          <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
          </form>
      </td>
      </td>
    </tr>
    @endforeach 
  </tbody>
</table>
</div>
@stop