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
    <a class="btn btn-primary" href="#" role="button">Agregar</a>
    <a class="btn btn-secondary" href="/" role="button">Regresar</a>
@stop


@section('contenido')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Edad</th>
      <th scope="col">Sexo</th>
      <th scope="col">Sueldo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><a class="btn btn-primary" href="#" role="button">Editar</a></td>
      <td><a class="btn btn-danger" href="#" role="button">Eliminar</a></td>
    </tr>
  </tbody>
</table>
@stop