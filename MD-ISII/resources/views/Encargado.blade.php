@extends('layouts.crud')

@section('title', 'Team')

@section('Titulo')
  <h1 class="display-1">Ministerio de Deportes</h1>
@show

@section('navbar navbar-expand-lg navbar-light bg-light')
  <!--Contenido extra para la navegación-->
@show
 
@section('Objeto', 'Encargado')


@section('botones')
    <a class="btn btn-primary" href="{{route('encargado.create')}}" role="button">Agregar</a>
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
    @foreach($encargado as $encargado)  
    <tr>             
      <td>{{$encargado->encid}}</td>
      <td>{{$encargado->encnombre}}</td>
      <td>{{$encargado->encapellido}}</td>
      <td>{{$encargado->encedad}}</td>
      <td>{{$encargado->encsexo}}</td>
      <td class="text-right"><a class="btn btn-primary btn-xs" href="{{route('encargado.edit',$encargado->encid)}}">Editar</a></td>
      <td>
        <form method="POST" action="{{route('encargado.destroy',$encargado->encid)}}">
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