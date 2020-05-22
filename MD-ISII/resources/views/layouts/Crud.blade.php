<html>
    <head>

        <title>Team - @yield('title')</title>
        <link rel="shortcut icon" type="image/x-icon"href="{{asset('Imagenes/icono.ico')}}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/stilo.css') }}" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class = "Titulo">
            @yield('titulo')
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
        <a class="navbar-brand" href="/">
            <img src=" {{asset('Imagenes/fondoBody.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
            Reservas Weke
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownServicio" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                    Servicio
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="select">
                    <a class="dropdown-item" href="/visitante">Visitante</a>
                    <a class="dropdown-item" href="/areas">Area Recreativa</a>
                    <a class="dropdown-item" href="/encargado">Encargado</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/reserva">Reserva</a>
                    </div>
                </li>
                <!--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownReporte" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                    Reporte
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="select">
                    <a class="dropdown-item" href="/visitante">Visitante</a>
                    <a class="dropdown-item" href="/areas">Area Recreativa</a>
                    <a class="dropdown-item" href="/encargado">Encargado</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/reserva">Reserva</a>
                    </div>
                </li>
                -->
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Reportes</a>
                </li>
                </ul>
            </div>
            </nav>
        <h2  style="padding: 0px 0px 0px 40px">@yield('Objeto')</h2>

        <div style="padding: 0px 0px 20px 40px">
            @yield('botones')
        </div>

        <div align = "center" style="padding: 0px 25px 0px 25px">

            <div id='texto'>
                @yield('contenido')
            </div>
            <img width="100" height="100" align= "center" src=" {{asset('Imagenes/fondoBody.png') }}">
        </div>

    </body>

<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#"> desarrollando</a>
  </div>
  <!-- Copyright -->

</footer>

</html>