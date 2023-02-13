<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/css/estilos.css')}}">

  <title></title>
</head>

<body>
  <div class="estructura">
    <nav class="navbar">
      <div>
        <ul>
          <li>LOGO</li>
          <li><a href="/">Inicio</a></li>
          <li><a href="/solicitud">Solicitud</a></li>


        </ul>
      </div>
    </nav>

    <div class="carrousel">
       
        @yield('contenido')
    </div>

    <div class="footer">
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">Esta página es una mqueta de
                una página en desarrollo de un concesionario de poca capacidad de coches de gran tarajal
              </p>
            </div>

          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by Natalia
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>