<!DOCTYPE html>
<html lang="en">
<head>
@yield('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1231344c8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/plantilla.css">
    <link rel="stylesheet" href="css/empresa.css">
    <link rel="stylesheet" href="css/servicios.css">
    <link rel="stylesheet" href="css/proyectos.css">
    <link rel="stylesheet" href="css/contacto.css">
</head>
<body>
    <header>
    @yield('header')

    <div class="container-fluid">
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item {{ Request::is('inicio') ? 'active' : '' }} mt-5 pt-5 pr-5">
            <a class="nav-link" href="./inicio">INICIO</a>
            </li>
            <li class="nav-item  {{ Request::is('empresa') ? 'active' : '' }} mt-5 pt-5 pr-5">
            <a class="nav-link" href="./empresa">EMPRESA</a>
            </li>
            <li class="nav-item {{ Request::is('servicios') ? 'active' : '' }} mt-5 pt-5 pr-5">
            <a class="nav-link" href="./servicios">SERVICIOS</a>
            </li>
          <a class="navbar-brand mr-5" href="#">
          <img class="img-logo"src="images/logo.jpg" class="nav-item__logo ">
            </a>
            <li class="nav-item {{ Request::is('proyectos') ? 'active' : '' }} mt-5 pt-5 pr-5">
            <a class="nav-link" href="./proyectos">PROYECTOS REALIZADOS</a>
            </li>
            <li class="nav-item {{ Request::is('contacto') ? 'active' : '' }} mt-5 pt-5 pr-5">
            <a class="nav-link" href="./contacto">CONTACTO</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- FIN Navbar-->
    </div>
    </header>
    @yield('contenido')
   
    @yield('footer')
     <footer class="container bg-light footer">
      <div>
          <div class="row">
            <!--Imagen y redes-->
              <div class="col-md-3 float-left">
                <img src="images/logo.jpg" style="width: 100px;">
                <div>
                  <span class="fa-stack" style="vertical-align: top;">
                    <i class="far fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x" style="color: blue;"></i>
                  </span>
                  <span class="fa-stack" style="vertical-align: top;">
                    <i class="far fa-circle fa-stack-2x"></i>
                    <i class="fab fa-linkedin-in fa-stack-1x" style="color: blue;"></i></i>
                  </span>
                </div>
              </div>
              <!--Fin de imagen y redes-->
              <!--Secciones-->
              <div class="col-md-4">
                <span style="color: #1E5494;">SECCIONES</span>
                <div class="row">
                  <div class="col-md">
                    <p>
                    Inicio
                    <br>
                    Empresa
                    <br>
                    Servicios
                  </p>
                  </div>
                  <div class="col-md">
                    <p>
                      Proyectos realizados
                      <br>
                      Contacto
                    </p>
                  </div>
                </div>
              </div>
              <!--Fin de Secciones-->
              <!--Datos de Contacto-->
              <div class="col-md text-left ">
                <span style="color: #1E5494;">INGAPS</span>
                <div class="d-block">
                  <i class="fas fa-map-marker-alt footer-icon mt-3 mr-3"></i>Corrientes 3651,Quilmes Oeste,Buenos Aires,Argentina
                  <br>
                  <i class="fas fa-phone-alt footer-icon mt-3 mr-3"></i>+54 113561-4916
                  <br>
                  <i class="fas fa-envelope footer-icon mt-3 mb-5 mr-3"></i>info@ingaps.com.ar
                </div>
              </div>
              <!--Fin de datos de Contacto-->
          </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>