@extends('layouts.crud')

@section('title', 'Team')

@section('Titulo')
  <h1 class="display-5">Ministerio de Deportes</h1>
@show

@section('navbar navbar-expand-lg navbar-light bg-light')
  <!--Contenido extra para la navegación-->
@show
 
@section('Objeto', 'Agregar Visitante')


@section('botones')
    <br>
    <a class="btn btn-secondary" href="/visitante" role="button">Regresar</a>
@stop


@section('contenido')
<form method="POST"  align= "left" action="{{ route('visitante.store') }}">
    @csrf
      <div class="form-group col-md-3">
        <label required>ID</label>
        <input type="text" class="form-control" name="visid" placeholder="identificación">
      </div>
      <div class="form-group col-md-3">
        <label>Nombre</label>
        <input type="text" class="form-control" name="visnombre" placeholder="Primer Nombre">
      </div>
      <div class="form-group col-md-3">
        <label>Apellido</label>
        <input type="text" class="form-control" name="visapellido" placeholder="Primer Apellido">
      </div>
      <div class="form-group col-md-1">
        <label>Edad</label>
        <input type="text" class="form-control" name="visedad" placeholder="Edad">
      </div>
      <div class="form-group col-md-2">
        <label>Sexo</label>
        <select name="vissexo" class="form-control">
          <option selected value ='M'>Masculino</option>
          <option value = 'F'>Femenino</option>
        </select>
      </div>
      <div style = "padding-left: 15px">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>

    </form>
@stop