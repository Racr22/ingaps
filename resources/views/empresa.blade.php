@extends('plantilla.plantilla')
<title>Ingaps-Empresa</title>
@section('contenido')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              
            <img src="images/Slider_EMPRESA.jpg" class="d-block w-100" alt="...">
            <div class="slide-texto">
            
                <h5 class="slide-h5__title">EFICIENCIA Y PRODUCTIVIDAD</h5>
         
                <h2 class="slide-h2__body">Más de 20 años de</h2>
                <h2 class="slide-h2__body"> experiencia en la industria</h2>
            
                </div>
            
          </div>
          <!-- <div class="carousel-item">
            <img src="Slider_EMPRESA.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 10%;">
              <p class="slide-p__texto">
                <h5 style="font:bold;color: darkblue;">EFICIENCIA Y PRODUCTIVIDAD</h5>
             
                <h1 style="color:darkblue;">Más de 20 años de</h1>
                <h1 style="color: darkblue;"> experiencia en la industria</h1>
              </p>
            </div>
          </div> -->
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
      <div class="container mt-5 mb-5">
         <div class="row">
             <div class="col-md-6 pt-3">
                <h3 class="texto-proyectos__title">Gestion de integral de proyectos</h3>
                <p class="texto-proyectos__cuerpo mt-4">Nuestro equipo de profesionales con más de 20 años de experiencia,
                    han participado de proyectos en las industrias mas exigentes del mercado.
                    Poniendo a prueba permanantemente estándares,metodologias,procesos y herramientas
                    para la dirección de proyectos.
                    <br>
                </p>
                <span class="texto-proyectos__cuerpo">El compromiso asumido con cada cliente, nos permitió identificarnos con un valor agregado</span>
             </div>
             <div class="col-md-6">
                <img src="images/empresa.jpg">
             </div>
         </div>
     </div>
@endsection
      
@yield('bootstrapjs')       
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>        
   