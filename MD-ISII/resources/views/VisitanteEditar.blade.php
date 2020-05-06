@extends('layouts.crud')

@section('title', 'Team')

@section('Titulo')
  <h1 class="display-1">Ministerio de Deportes</h1>
@show

@section('navbar navbar-expand-lg navbar-light bg-light')
  <!--Contenido extra para la navegación-->
@show
 
@section('Objeto', 'Editar Visitante')


@section('botones')
    <br>
    <a class="btn btn-secondary" href="/visitante" role="button">Regresar</a>
@stop


@section('contenido')
<form method="POST" align= "left" action="{{route('visitante.update', $visitante->visid)}}">
    @csrf
    @method('PUT')
      <div class="form-group col-md-3">
        <label required>ID</label>
        <input type="text" class="form-control" name="visid" value="{{$visitante->visid}}" readonly>
      </div>
      <div class="form-group col-md-3">
        <label>Nombre</label>
        <input type="text" class="form-control" name="visnombre" Value="{{$visitante->visnombre}}">
      </div>
      <div class="form-group col-md-3">
        <label>Apellido</label>
        <input type="text" class="form-control" name="visapellido" value="{{$visitante->visapellido}}">
      </div>
      <div class="form-group col-md-1">
        <label>Edad</label>
        <input type="text" class="form-control" name="visedad" value="{{$visitante->visedad}}">
      </div>     
        @if($visitante->vissexo == 'M')
        <div class="form-group col-md-2">
          <label>Sexo</label>
          <select name="vissexo" class="form-control">
            <option value ='M' selected>Masculino</option>
            <option value = 'F'>Femenino</option>
          </select>
      </div>
        @else
        <div class="form-group col-md-2">
          <label>Sexo</label>
          <select name="vissexo" class="form-control">
            <option value = 'M'>Masculino</option>
            <option value = 'F'selected>Femenino</option>
          </select>
        </div>
        @endif
      <div class="col-md-6">
        <button type="submit" class="btn btn-primary">Editar</button>
        <a class="btn btn-danger btn-xs" href="/visitante">Cancelar</a>
      </div>

    </form>
@stop