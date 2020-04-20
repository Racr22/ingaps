@extends('plantilla.plantilla')
<title>Proyectos-Ingaps</title>
@section('contenido')
<div class="d-inline text-center">
        <p class="proyecto-texto-inicial">Desarrollamos gestiones integrales a medida según los 
            requerimientos y las<br> necesidades de cada uno de nuestros proyectos.
            
            Acompañamos a nuestros clientes<br> en la búsqueda de las mejores soluciones 
            para sus industrias.
        </p>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-md text-center">
            <img class="proyectos-logos mb-2"src="logos/planing.svg">
                <h1 class="proyecto-numeros">#1</h1>
                <span>Analisis del caso y prediseño</span>
            </div>
            <div class="col-md-1">
            <i class="fas fa-chevron-right fa-2x mt-5"></i>
            </div>
            <div class="col-md text-center">
                <img class="proyectos-logos mb-2" src="logos/compas.svg" >
                <h1 class="proyecto-numeros">#2</h1>
                <span>Ingeniería del detalle</span>
            </div>
            <div class="col-md-1">
                <i class="fas fa-chevron-right fa-2x mt-5"></i>
            </div>
            <div class="col-md text-center">
                <img class="proyectos-logos mb-2"src="logos/llave-inglesa.svg" >
                <h1 class="proyecto-numeros">#3</h1>
                <span>Implementación y montaje</span>
            </div>
        </div> 
    </div>
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            
                <div class="row d-block mb-1">
                    <img src="images/proyectos reslizados 1.jpg">
                    <img class="ml-4"src="images/proyectos reslizados 2.jpg">
                    <img class="ml-4" src="images/proyectos reslizados 3.jpg">
                </div>
            <div class="row d-block mt-4">
                    <img src="images/proyectos reslizados 4.jpg">
                    <img class="ml-4" src="images/proyectos reslizados 5.jpg">
                    <img class="ml-4" src="images/proyectos reslizados 6.jpg">
            </div>
        </div>
    </div>
@endsection