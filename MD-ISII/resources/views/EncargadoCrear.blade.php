@extends('layouts.crud')

@section('title', 'Agregar Encargado')

@section('titulo', 'Ministerio de Deportes')

@section('Objeto', 'Agregar Encargado')

@section('botones')
    <br>
    <a class="btn btn-secondary" href="/encargado" role="button">Regresar</a>
@stop


@section('contenido')
<form method="POST"  align= "left" action="{{ route('encargado.store') }}">
    @csrf
      <div class="form-group col-md-3">
        <label required>ID</label>
        <input type="text" class="form-control" name="encid" placeholder="identificación" required pattern="[0-9]{10}">
        @error('encid')
        <span class=”invalid-feedback” role=”alert” style="color:red">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="form-group col-md-3">
        <label>Nombre</label>
        <input type="text" class="form-control" name="encnombre" placeholder="Primer Nombre" required>
      </div>
      <div class="form-group col-md-3">
        <label>Apellido</label>
        <input type="text" class="form-control" name="encapellido" placeholder="Primer Apellido" required>
      </div>
      <div class="form-group col-md-1">
        <label>Edad</label>
        <input type="number" class="form-control" name="encedad" placeholder="Edad" min=18 max=90 required>
      </div>
      <div class="form-group col-md-2">
        <label>Sexo</label>
        <select name="encsexo" class="form-control">
          <option selected value ='M'>Masculino</option>
          <option value = 'F'>Femenino</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label>Sueldo</label>
        <input type="number" class="form-control" name="encsueldo" placeholder="Sueldo" min=0 required>
      </div>
      <div style = "padding-left: 15px">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>

    </form>
@stop