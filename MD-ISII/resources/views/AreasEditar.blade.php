@extends('layouts.crud')

@section('title', 'Team')

@section('titulo','Ministerio de Deportes')
 
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
        <select name="encid" class="form-control" type="text" id="encid" style="width:220px">
          @foreach($encargados as $encargado)
          <option @if($areas->encid == $encargado->encid) selected  @endif 
          value="{{$encargado->encid}}">{{$encargado->encnombre}} {{$encargado->encapellido}}</option>
          @endforeach
          </select>
        
      </div>
      <div class="form-group col-md-3">
        <label>Area</label>
        <input type="text" class="form-control" name="areanombre" value="{{$areas->areanombre}}" required>
      </div>
      <div class="form-group col-md-3">
        <label>Descripcion</label>
        <input type="text" class="form-control" name="areadesc" value="{{$areas->areadesc}}"required>
      </div>     
      <div class="form-group col-md-3">
      <label>Aforo</label>
        <input type="number" class="form-control" name="areaaforo" value="{{$areas->areaaforo}}" min=0>
      </div>     
      <div class="col-md-6">
        <button type="submit" class="btn btn-primary">Editar</button>
        <a class="btn btn-danger btn-xs" href="/areas">Cancelar</a>
      </div>

    </form>
@stop