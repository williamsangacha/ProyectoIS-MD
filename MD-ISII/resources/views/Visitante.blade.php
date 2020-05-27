@extends('layouts.crud')

@section('title', 'Visitante')

@section('titulo','Ministerio de Deportes')
 
@section('Objeto', 'Visitante')


@section('botones')
    <a class="btn btn-primary" href="{{route('visitante.create')}}" role="button">Agregar</a>
    <a class="btn btn-secondary" href="/" role="button">Regresar</a>
@stop


@section('contenido')
<div class="table-responsive-sm">
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Edad</th>
    <th>Sexo</th>
    <th colspan="2" class="text-center">Opciones</th>
    
  </thead>
  <tbody>
    @foreach($visitantes as $visitante)  
    <tr>             
      <td>{{$visitante->visid}}</td>
      <td>{{$visitante->visnombre}}</td>
      <td>{{$visitante->visapellido}}</td>
      <td>{{$visitante->visedad}}</td>
      <td>{{$visitante->vissexo}}</td>
      <td class="text-right"><a class="btn btn-primary btn-xs" href="{{route('visitante.edit',$visitante->visid)}}">Editar</a></td>
      <td>
        <form method="POST" action="{{route('visitante.destroy',$visitante->visid)}}">
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