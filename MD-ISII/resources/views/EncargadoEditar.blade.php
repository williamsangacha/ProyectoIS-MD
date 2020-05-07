@extends('layouts.crud')

@section('title', 'Team')

@section('Titulo')
  <h1 class="display-1">Ministerio de Deportes</h1>
@show

@section('navbar navbar-expand-lg navbar-light bg-light')
  <!--Contenido extra para la navegación-->
@show
 
@section('Objeto', 'Editar Encargado')


@section('botones')
    <br>
    <a class="btn btn-secondary" href="/encargado" role="button">Regresar</a>
@stop


@section('contenido')
<form method="POST" align= "left" action="{{route('encargado.update', $encargado->encid)}}">
    @csrf
    @method('PUT')
      <div class="form-group col-md-3">
        <label required>ID</label>
        <input type="text" class="form-control" name="encid" value="{{$encargado->encid}}" readonly>
      </div>
      <div class="form-group col-md-3">
        <label>Nombre</label>
        <input type="text" class="form-control" name="encnombre" Value="{{$encargado->encnombre}}">
      </div>
      <div class="form-group col-md-3">
        <label>Apellido</label>
        <input type="text" class="form-control" name="encapellido" value="{{$encargado->encapellido}}">
      </div>
      <div class="form-group col-md-1">
        <label>Edad</label>
        <input type="text" class="form-control" name="encedad" value="{{$encargado->encedad}}">
      </div>     
        @if($visitante->vissexo == 'M')
        <div class="form-group col-md-2">
          <label>Sexo</label>
          <select name="encsexo" class="form-control">
            <option value ='M' selected>Masculino</option>
            <option value = 'F'>Femenino</option>
          </select>
      </div>
        @else
        <div class="form-group col-md-2">
          <label>Sexo</label>
          <select name="encsexo" class="form-control">
            <option value = 'M'>Masculino</option>
            <option value = 'F'selected>Femenino</option>
          </select>
        </div>
        <div class="form-group col-md-3">
        <label>Sueldo</label>
        <input type="text" class="form-control" name="encsueldo" Value="{{$encargado->encsueldo}}">
      </div>
        @endif
      <div class="col-md-6">
        <button type="submit" class="btn btn-primary">Editar</button>
        <a class="btn btn-danger btn-xs" href="/encargado">Cancelar</a>
      </div>

    </form>
@stop