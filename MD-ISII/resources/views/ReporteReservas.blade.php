@extends('layouts.crud')

@section('title', 'Reporte de Reservas')

@section('titulo', 'Ministerio de Deportes')

@section('Objeto', 'Reporte de Reservas')


@section('contenido')
<form  method="PUT" action="{{ route('Reporte.ReportePDF') }}">
    @method('PUT')
    <div class="container">
        <div >
          <div >
            <label>Area</label>
            <select name="areacodigo" class="form-control" type="text" id="areacodigo" style="width:220px">
                <option>Areas</option>
                @foreach($areas as $area)
                <option value="{{$area->areacodigo}}">{{$area->areanombre}}</option>
                @endforeach
                </select>
            <br>
          </div>
          <div class="col-sm">
            
              
                <meta charset="utf-8" />
                <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
                <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
                <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
                <script>
                $(function () {
                  $("#datepicker2").datepicker({
                    dateFormat: 'dd/mm/yy',
                    altField: "#fecha",
                firstDay: 1,
                monthNames: ['Enero', 'Febrero', 'Marzo',
                'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre',
                'Octubre', 'Noviembre', 'Diciembre'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                defaultDate: "-1"
                });
                });
                </script>

                
                <div class="form-group col-md-3">
                    <label>Fecha</label>
                    <input type="text" class="form-control" id="fecha" name="fecha" size="30">
                  </div>
                
                
                <div id="datepicker2"></div>
                
              
              
      
          </div>
        </div>
      </div>
    <br>
    <br>
  
  <div><button onclick="alert('PDF Generado, Espere a que se abra');" type="submit" class="btn btn-primary">Generar PDF</button></div>
  </form>
@stop