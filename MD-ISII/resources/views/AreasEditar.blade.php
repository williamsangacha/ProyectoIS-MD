@extends('layouts.crud')

@section('title', 'Team')

@section('Titulo')
  <h1 class="display-5">Ministerio de Deportes</h1>
@show

@section('navbar navbar-expand-lg navbar-light bg-light')
  <!--Contenido extra para la navegación-->
@show
 
@section('Objeto', 'Editar Area')


@section('botones')
    <br>
    <a class="btn btn-secondary" href="/areas" role="button">Regresar</a>
@stop


@section('contenido')
<form method="POST" align= "left" action="{{route('areas.update', $areas->areacodigo)}}">
    @csrf
    @method('PUT')
      <div class="form-group col-md-3">
        <label required>ID</label>
        <input type="text" class="form-control" name="areacodigo" value="{{$areas->areacodigo}}" readonly>
      </div>
      <div class="form-group col-md-3">
        <label>Encargado</label>
        <input type="text" class="form-control" name="encid" Value="{{$areas->encid}}">
      </div>
      <div class="form-group col-md-3">
        <label>Area</label>
        <input type="text" class="form-control" name="areanombre" value="{{$areas->areanombre}}">
      </div>
      <div class="form-group col-md-3">
        <label>Descripcion</label>
        <input type="text" class="form-control" name="areadesc" value="{{$areas->areadesc}}">
      </div>     
      <div class="form-group col-md-3">
      <label>Aforo</label>
        <input type="number" class="form-control" name="areaaforo" value="{{$areas->areaaforo}}">
      </div>     
      <div class="col-md-6">
        <button type="submit" class="btn btn-primary">Editar</button>
        <a class="btn btn-danger btn-xs" href="/areas">Cancelar</a>
      </div>

    </form>
@stop