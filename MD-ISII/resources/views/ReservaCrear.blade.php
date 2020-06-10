@extends('layouts.crud')

@section('title', 'Agregar Reserva')

@section('titulo', 'Ministerio de Deportes')

@section('Objeto', 'Agregar Reserva')


@section('botones')
    <br>
    <a class="btn btn-secondary" href="/reserva" role="button">Regresar</a>
@stop


@section('contenido')
<form method="POST"  align= "left" action="{{ route('reserva.store') }}">
    @csrf
      <div class="form-group col-md-3">
        <label required>Codigo</label>
        <input type="text" class="form-control" name="rescodigo" value="<?php echo (rand(1, 100000));?>" readonly>
      </div>
      <div class="form-group col-md-3">
        <label>Visitante</label>
        <select name="visid" class="form-control" type="text" id="visid" style="width:220px">
          <option>Visitantes</option>
          @foreach($visitantes as $visitante)
          <option value="{{$visitante->visid}}">{{$visitante->visnombre}} {{$visitante->visapellido}}</option>
          @endforeach
          </select>
      </div>
      <div class="form-group col-md-3">
        <label>Area</label>
        <select name="areacodigo" class="form-control" type="text" id="areacodigo" style="width:220px">
          <option>Areas</option>
          @foreach($areas as $area)
          <option value="{{$area->areacodigo}}">{{$area->areanombre}}</option>
          @endforeach
          </select>
      </div>
      <div class="form-group col-md-3">
        <label>Fecha de Reserva</label>
        <input type="date" class="form-control" name="resfecha" value="<?php echo date("Y-m-d");?>" min="<?php echo date("Y-m-d");?>">
      </div>
      <div class="form-group col-md-2">
        <label>Hora de Reserva</label>
        <input type="time" class="form-control" name="reshora" step="1" value="<?php date_default_timezone_set("America/Bogota"); echo date("H:i:s");?>" min="<?php date_default_timezone_set("America/Bogota"); echo date("H:i:s");?>">
      </div>
      <div style = "padding-left: 15px">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>

    </form>
@stop