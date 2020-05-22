@extends('layouts.crud')

@section('title', 'Team')

@section('Titulo')
  <h1 class="display-5">Ministerio de Deportes</h1>
@show

@section('navbar navbar-expand-lg navbar-light bg-light')
  <!--Contenido extra para la navegación-->
@show
 
@section('Objeto', 'Reserva')


@section('botones')
    <a class="btn btn-primary" href="{{route('reserva.create')}}" role="button">Agregar</a>
    <a class="btn btn-secondary" href="/" role="button">Regresar</a>
@stop


@section('contenido')
<div class="table-responsive-sm">
<table class="table table-striped">
  <thead>
    <th>Codigo Reserva</th>
    <th>Visitante</th>
    <th>Area</th>
    <th>Fecha Reserva</th>
    <th>Hora Reserva</th>
    
    <th colspan="2" class="text-center">Opciones</th>
    
  </thead>
  <tbody>
    @foreach($reservas as $reserva)  
    <tr>             
      <td>{{$reserva->rescodigo}}</td>
      @foreach($visitantes as $visitante)
        @if($visitante->visid==$reserva->visid)
          <td>{{$visitante->visnombre}} {{$visitante->visapellido}}</td>
        @endif
      @endforeach
      @foreach($areas as $area)
        @if($area->areacodigo==$reserva->areacodigo)
          <td>{{$area->areanombre}}</td>
        @endif
      @endforeach
      <td>{{$reserva->resfecha}}</td>
      <td>{{$reserva->reshora}}</td>
      <td class="text-right"><a class="btn btn-primary btn-xs" href="{{route('reserva.edit',$reserva->rescodigo)}}">Editar</a></td>
      <td>
        <form method="POST" action="{{route('reserva.destroy',$reserva->rescodigo)}}">
        @method('DELETE')
        @csrf
          <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
          </form>
      </td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@stop