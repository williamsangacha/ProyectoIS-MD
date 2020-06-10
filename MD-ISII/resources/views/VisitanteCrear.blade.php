@extends('layouts.crud')

@section('title', 'VisitanteCrear')

@section('titulo','Ministerio de Deportes')

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
        <input type="text" class="form-control" name="visid" placeholder="identificación" pattern="[0-9]{10}" title="cedula" required>
        @error('visid')
        <span class=”invalid-feedback” role=”alert” style="color:red">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="form-group col-md-3">
        <label>Nombre</label>
        <input type="text" class="form-control" name="visnombre" placeholder="Primer Nombre" required>
      </div>
      <div class="form-group col-md-3">
        <label>Apellido</label>
        <input type="text" class="form-control" name="visapellido" placeholder="Primer Apellido" required>
      </div>
      <div class="form-group col-md-1">
        <label>Edad</label>
        <input type="number" class="form-control" name="visedad" placeholder="Edad" min="18" max="90" required>
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