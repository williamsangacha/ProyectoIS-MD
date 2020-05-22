@extends('layouts.crud')

@section('title', 'Team')

@section('Titulo')
  <h1 class="display-5">Ministerio de Deportes</h1>
@show

@section('navbar navbar-expand-lg navbar-light bg-light')
  <!--Contenido extra para la navegación-->
@show
 
@section('Objeto', 'Editar Reserva')


@section('botones')
    <br>
    <a class="btn btn-secondary" href="/reserva" role="button">Regresar</a>
@stop


@section('contenido')
<form method="POST" align= "left" action="{{route('reserva.update', $reservas->rescodigo)}}">
    @csrf
    @method('PUT')
    <div class="form-group col-md-3">
        <label required>Codigo</label>
        <input type="text" class="form-control" name="rescodigo" value="{{$reservas->rescodigo}}" readonly>
      </div>
      <div class="form-group col-md-3">
        <label>Visitante</label>
        <select name="visid" class="form-control" type="text" id="visid" style="width:220px">
          @foreach($visitantes as $visitante)
          <option @if($reservas->visid == $visitante->visid) selected  @endif 
          value="{{$visitante->visid}}">{{$visitante->visnombre}} {{$visitante->visapellido}}</option>
          @endforeach
          </select>
      </div>
      <div class="form-group col-md-3">
        <label>Area</label>
        <select name="areacodigo" class="form-control" type="text" id="areacodigo" style="width:220px">
          @foreach($areas as $area)
          <option @if($reservas->areacodigo == $area->areacodigo) selected  @endif 
          value="{{$area->areacodigo}}">{{$area->areanombre}}</option>
          @endforeach
          </select>
      </div>
      <div class="form-group col-md-3">
        <label>Fecha de Reserva</label>
        <input type="date" class="form-control" name="resfecha" value="{{$reservas->resfecha}}">
      </div>
      <div class="form-group col-md-2">
        <label>Hora de Reserva</label>
        <input type="time" class="form-control" name="reshora" step="1" value="{{$reservas->reshora}}">
      </div>     
      <div class="col-md-6">
        <button type="submit" class="btn btn-primary">Editar</button>
        <a class="btn btn-danger btn-xs" href="/areas">Cancelar</a>
      </div>

    </form>
@stop