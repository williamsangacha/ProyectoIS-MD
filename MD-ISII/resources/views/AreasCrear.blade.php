@extends('layouts.crud')

@section('title', 'Team')

@section('titulo','Ministerio de Deportes')
 
@section('Objeto', 'Agregar Area')

@section('botones')
    <br>
    <a class="btn btn-secondary" href="/areas" role="button">Regresar</a>
@stop


@section('contenido')
<form method="POST"  align= "left" action="{{ route('areas.store') }}">
    @csrf
      <div class="form-group col-md-3">
        <label required>ID</label>
        <input type="text" class="form-control" name="areacodigo" placeholder="ID Area" required pattern="[0-9]" maxlength="5">
        @error('areacodigo')
        <span class=”invalid-feedback” role=”alert” style="color:red">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="form-group col-md-3">
        <label>Encargado</label>
        <select name="encid" class="form-control" type="text" id="encid" style="width:220px">
        <option>Encargados *</option>
        @foreach($encargados as $encargado)
        <option value="{{$encargado->encid}}">{{$encargado->encnombre}} {{$encargado->encapellido}}</option>
        @endforeach
        </select>
      </div>
      <div class="form-group col-md-3">
        <label>Area</label>
        <input type="text" class="form-control" name="areanombre" placeholder="Nombre del Area " required>
      </div>
      <div class="form-group col-md-3">
        <label>Descripcion</label>
        <input type="text" class="form-control" name="areadesc" placeholder="Descripcion del Area" required>
      </div>
      <div class="form-group col-md-3">
        <label>Aforo</label>
        <input type="number" class="form-control" name="areaaforo" placeholder="Aforo del Area" min=0>
      </div>
      <div style = "padding-left: 15px">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>

    </form>
@stop