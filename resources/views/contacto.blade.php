@extends('plantilla.plantilla')


<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script>jQuery.noConflict();</script> 

@section('contenido')
<meta name="csrf-token" content="{{ csrf_token() }}">  



<script src="js/contacto.js"></script>
    
<div class="container-fluid-w-100">
        <img src="images/Slider CONTACTO.jpg">
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6 mt-5">
                <h2 class="titulo-contacto">Contacto</h2>
                <p class="contacto-texto-form">Para más información comuníquese con nuestros especialistas vía email a
                <span class="mail-contacto">info@ingaps.com.ar</span> o llenando el formulario a continuacion
                </p>
                <form id="contacto">
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="contacto-texto-form-label">Nombre</label>
                        <input id="Nombre" type="text" class="form-control nombre" id="exampleFormControlInput1" placeholder="Ingresar nombre" required>
                      </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1" class="contacto-texto-form-label">Correo electrónico</label>
                      <input id="Correo" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su correo" required>
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1" class="contacto-texto-form-label">Mensaje</label>
                      <textarea id="Mensaje" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escriba su mensaje..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-enviar-consulta boton-enviar">
                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>    
                    <span class="btn-text">Enviar</span>
                    </button>
                  </form>
            </div>
            <div class="col-md-5 ml-5 px-0 mt-5">
                <div class="card card-contacto">
                    <div class="card-body text-center">
                        <p class="card-title"><i class="fas fa-map-marker-alt fa-2x contacto-iconos"></i></p>
                        <h5 class="card-dato-contacto">DIRECCIÓN</h5>
                        <p class="card-text">Corrientes 3651,Quilmes Oeste,Buenos Aires,Argentina</p>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-title"><i class="fas fa-phone-alt fa-2x contacto-iconos"></i></p>
                        <h5 class="card-dato-contacto">TÉLEFONO</h5>
                        <p class="card-text">+54 113561-4916</p>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-title"><i class="fas fa-envelope fa-2x contacto-iconos"></i></p>
                        <h5 class="card-dato-contacto">EMAIL</h5>
                        <p class="card-text">info@ingaps.com.ar</p>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>