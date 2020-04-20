@extends('plantilla.plantilla')
<title>Ingaps</title>
@section('contenido')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/Slider_HOME.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 10%;">
              <p>
              <h5 class="slide-titulo">INGAPS SOLUCIONES INTEGRALES</h5>
             
                <h1 class="slide-subtitulo">Ingenieria de calidad</h1>
                <h1 class="slide-subtitulo"> al servicio del cliente</h1>
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/Slider_HOME.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 10%;">
              <p>
              <h5 class="slide-titulo">INGAPS SOLUCIONES INTEGRALES</h5>
             
                <h1 class="slide-subtitulo">Ingenieria de calidad</h1>
                <h1 class="slide-subtitulo"> al servicio del cliente</h1>
              </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--Imagenes con link-->
      <div class="col-md-12 col-12 col-sm-12 col-xs-12">
        <div class="container">
          <div class="row">
              <div class="col-md-6 col-6 col-sm-6 col-xs-6 main-img__imgizq">
                <img src="images/Home 1_Mesa de trabajo 1.png">
                
                <p class="img-p__img1 pl-4">
                 <span class="img-p__span1"> Área de Ingeniería:</span>
                  <br>
                  <span class="img-p__texto">-Ingeniería de detalle: cañerias,mecánica,electricidad.</span>
                  <br>
                  <span class="img-p__texto">-Instrumentación y civil.</span>
                  <br>
                  <span class="img-p__texto">-Relevamientos en plantas industriales</span>
                  <br>
                  
                  <a href="https://www.google.com.ar" class="btn btn-light button-area mt-3" role="button">Ingresar</a>
                </p>
                
              </div>
              <div class="col-md-6 main-img__imgder">
                <img  src="images/Home 1_Mesa de trabajo 2.png">
                <p class="img-p__img2">
                  <span class="img2-p__span1">Área de Procura:</span>
                  <br>
                  <span class="img2-p__texto">-Terciarización de gestión de compras</span>
                  <br>
                  <span class="img2-p__texto">-Desarrollo e identificación de proveedores locales y del exterior</span>
                  <br>
                  <a href="https://www.google.com.ar" class="btn btn-light button-area mt-4" role="button">Ingresar</a>
                </p>
              </div>
          </div>
        </div>
      </div>
      <!--Fin imagenes con link-->
    <!--Proyectos-->
    <div class="container-fluid bg-light">
      <div class="row mb-5 ml-5 pl-5">
        
        <h3 class="proyectos-title">Proyectos realizados</h3>
        <div class="linea" ></div>
      </div>
      <div class="container">
      <div class="row">
          <div class="col-md col-sm text-center">
            <img class="proyectos-logos"src="logos/planing.svg" width="75px">
              <h1 class="proyecto-numeros">#1</h1>
              <span class="proyecto-texto">Analisis del caso y prediseño</span>
          </div>
          <div class="col-md-1 text-center">
          <i class="fas fa-chevron-right fa-2x mt-5"></i>
        </div>
            <div class="col-md col-sm text-center">
            <img class="proyectos-logos" src="logos/compas.svg" width="75px">
              <h1 class="proyecto-numeros">#2</h1>
              <span class="proyecto-texto">Ingeniería del detalle</span>
            </div>
            <div class="col-md-1 text-center">
              <i class="fas fa-chevron-right fa-2x mt-5"></i>
            </div>
            <div class="col-md col-sm text-center">
            <img class="proyectos-logos"src="logos/llave-inglesa.svg" width="75px">
              <h1 class="proyecto-numeros">#3</h1>
              <span class="proyecto-texto">Implementación y montaje</span>
            </div>
        </div> 
        <div class="text-center">
        <a type="button" class="btn button-proyectos mt-5 mb-5" href="./proyectos">Ingresar a proyectos</a>
        </div>
      </div>
    </div>
        <!--Texto-->
        <div class="container mt-5">
          <div class="row">
              <div class="col-md align-middle ofrecemos-text__izq">
                <h2>Ofrecemos Soluciones en Ingeniería de alta calidad</h2>
              </div>
              <div class="col-md">
                <p class="ofrecemos-text__der text-justify">
                  Ocupamos un lugar de preponderancia dentro del rubro, atendiendo un 
                  <span class="ofrecemos-text-resaltado">amplo espectro de industrias</span>
                  y sectores diversos
                   como: Gas, Petróleo, Mineria, Construcción, Agroindustria, Industria Alimenticia y farmacéutica.
                </p>
              </div>
          </div>
        </div>
        <!--Fin texto-->
        <div class="container mt-5 descripcion">
        <div class="row">
            <div class="col-md-6 col- col-xs col-sm">
              <img src="images/Home 3.jpg">
            </div>
            <div class="col-md col- col-xs col-sm">
              <div class="row">
                <div class="col-md pl-5 pt-3">
                  <div class="row">
                      <div class="col-md-2 mr-3 pr-3">
                        <span class="fa-stack fa-2x mr-3">
                          <i class="fas fa-circle fa-stack-2x descripcion-icon__item"></i>
                          <i class="fas fa-lightbulb fa-stack-1x fa-inverse"></i>
                          </span>
                      </div>
                      <div class="col-md-9 pr-3">
                        <h2 class="descripcion-title">Innovación</h2>
                        
                          <p class="descripcion-p_text">Servicios de alta calidad que contribuyan al crecimiento del sector</p>
                      </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md-2 mr-3 pr-5">
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x descripcion-icon__item"></i>
                        <i class="fas fa-chart-line fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="col-md-9 pr-5">
                      <h2 class="descripcion-title">Trayectoria</h2>
                    <p class="descripcion-p_text">Ingaps está formado por profesionales que cuentan con más de 20 años de experiencia en las industrias más exigentes</p>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md-2 mr-3 pr-5">
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x descripcion-icon__item"></i>
                        <i class="fas fa-medal fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="col-md-9 pr-5">
                      <h2 class="descripcion-title">Calidad</h2>
                      <p class="descripcion-p_text">Ingaps es sinónimo de confiabilidad, precisión y respaldo técnico</p>
                    </div>
                  </div>
                    <div class="row mt-3">
                      <div class="col-md-2 mr-3 pr-5">
                        <span class="fa-stack fa-2x">
                          <i class="fas fa-circle fa-stack-2x descripcion-icon__item"></i>
                          <i class="fas fa-shield-alt fa-stack-1x fa-inverse"></i>
                          </span>
                      </div>
                      <div class="col-md pr-5">
                        <h2 class="descripcion-title">Seguridad</h2>
                        <p class="descripcion-p_text">Somos especialistas en servicios y productos de alta complejidad</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!--Fin de Descripciones-->
@endsection
      
@yield('bootstrapjs')       
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>        
   