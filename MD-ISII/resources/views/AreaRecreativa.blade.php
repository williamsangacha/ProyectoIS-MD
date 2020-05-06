@extends('layouts.crud')

@section('title', 'Team')

@section('Titulo')
  <h1 class="display-1">Ministerio de Deportes</h1>
@show

@section('navbar navbar-expand-lg navbar-light bg-light')
  <!--Contenido extra para la navegación-->
@show
 
@section('Objeto', 'AreaRecreativa')


@section('botones')
    <a class="btn btn-primary" href="#" role="button">Agregar</a>
    <a class="btn btn-secondary" href="/" role="button">Regresar</a>
@stop


@section('contenido')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del Área</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Aforo</th>
      <th scope="col">ID del Encargado </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Cancha futbol</td>
      <td>Cancha futbol</td>
      <td>25</td>
      <td>2</td>
      <td><a class="btn btn-primary" href="#" role="button">Editar</a></td>
      <td><a class="btn btn-danger" href="#" role="button">Eliminar</a></td>
    </tr>
  </tbody>
</table>
@stop