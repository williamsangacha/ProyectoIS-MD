@extends('layouts.master')

@section('title', 'Team')

@section('titulo', 'Ministerio de Deportes') 

@section('contenido')
  <!--Seccion de escritura-->
  <div class="row row-cols-1 row-cols-md-3" style="padding:10px 10% 10px 10%">
  <div class="col mb-4">
    <div class="card h-100" id="nav">
      <img src=" {{asset('Imagenes/basketball.jpg') }}" width="100" height="300"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Basketball</h5>
        <p class="card-text">El baloncesto, basquetbol o básquetbol o simplemente básquet, ​ es un deporte de equipo, jugado entre dos conjuntos de cinco jugadores cada uno durante cuatro períodos o cuartos de diez​ o doce minutos cada uno</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100" id="nav">
      <img src=" {{asset('Imagenes/piscina.jpg') }}" width="100" height="300" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Piscina</h5>
        <p class="card-text">Una piscina olímpica es un tipo de piscina usada en los juegos olímpicos y campeonatos mundiales. El tamaño de la piscina es comúnmente usado para explicar cuánta agua hay en una localización en particular.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100" id="nav"> 
      <img src=" {{asset('Imagenes/tennis.jpg') }}" width="100" height="300" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tennis</h5>
        <p class="card-text">El tenis, también llamado tenis de campo y asimismo es un deporte de alto trafico​ es un deporte de raqueta practicado sobre una pista rectangular, delimitada por líneas y dividida por una red.​Se disputa entre dos jugadores o entre dos parejas.</p>
      </div>
    </div>
  </div>
</div>
  
@stop

