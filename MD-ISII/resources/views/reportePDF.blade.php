<html>
    <head>
        <title>Reporte de Reservas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div align:center>
          <table class="table table-bordred table-striped table-responsive-sm table-hover">
            <tr>
              <td align="center" class="align-middle">
                <img width="100" height="100" align= "center" src="Imagenes/fondoBody.png">
              </td>
              <td  align="center" class="align-middle">
                <h1 style="text-align:center">Reporte de Reservas</h1>
              </td>
            </tr>
          </table>            
        </div>
        <div  class="table-responsive-sm">
            <table class="table table-bordred table-striped table-responsive-sm table-hover">
                <tr>
                    <td>Area:</td> 
                    @if ($ar == "Todas")
                    <td>Todas</td>
                    @else
                        @foreach($areas as $area)
                            @if($area->areacodigo==$ar." ")
                                <td>{{$area->areanombre}}</td>
                            @endif
                        @endforeach
                    @endif
                      
                    <td>Fecha de Reserva:</td>
                    <td>{{$fh}}</td>
                </tr>
                
            </table>
        </div>

        
        <div class="table-responsive-sm">
            @if ($ar == "Todas")
            <table class="table table-striped">
                <thead>
                    <tr>
                  <th>Codigo Reserva</th>
                  <th>Area</th>
                  <th>Visitante</th>
                  <th>Hora Reserva</th>
              </tr>
                  
                  
                  
                </thead>
                <tbody>
                  @foreach($reservas as $reserva)  
                  <tr>             
                    <td>{{$reserva->rescodigo}}</td>
                    @foreach($areas as $area)
                        @if($area->areacodigo==$reserva->areacodigo)
                        <td>{{$area->areanombre}}</td>
                        @endif
                    @endforeach
                    @foreach($visitantes as $visitante)
                      @if($visitante->visid==$reserva->visid)
                        <td>{{$visitante->visnombre}} {{$visitante->visapellido}}</td>
                      @endif
                    @endforeach
                    <td>{{$reserva->reshora}}</td>
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
                
            @else
            <table class="table table-striped">
                <thead>
                    <tr>
                  <th>Codigo Reserva</th>
                  <th>Visitante</th>
                  <th>Hora Reserva</th>
              </tr>
                  
                  
                  
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
                    <td>{{$reserva->reshora}}</td>
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
            @endif
            
            </div>
                
              
       

    </body>


</html>




