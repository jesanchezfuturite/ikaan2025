@extends('layouts.front.master') 
{{-- Page Title --}}

@section('pageTitle') Servicios @stop
@section('pageCSS')
@stop
@section("content") 
    <!-- ------------------------------------------------------------------ -->
    <div class="banner-servicios">
        <div class="container">
            <div class="bannerTextoServiciosTopTExto">
                <div class="col-sm-6 col-sm-offset-3">
                    <h1><span class="paquetesTituloBanner">SERVICIOS</span></h1> 
                </div>
            </div>
        </div>
    </div>
    <!---->
    <div class="section02_servicios">
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2">
                <p class="ttiulo">
                    En Hotel Ikaan Villa Spa, nuestra prioridad eres tú, es por eso que contamos con una amplia variedad de servicios que tienen la finalidad de brindarte una experiencia de plenitud total.
                </p>
            </div>
        </div>
    </div>
    <!---->
    <div class="section03_servicios">
        <div class="col-sm-2 col-xs-6">
            <div class="container2">
                <img src="assets/img/servicios/01.png" class="image" alt="icono">
                <div class="overlay">
                    <div class="text"><a href="{{ url('hospedaje') }}">Hospedaje</a></div>
                </div>
            </div>
        </div>
        <!----->
        <div class="col-sm-2 col-xs-6">
            <div class="container2">
                <img src="assets/img/servicios/02.png" class="image" alt="icono">
                <div class="overlay">
                    <div class="text"><a href="{{ url('paquetes') }}">Paquetes</a></div>
                </div>
            </div>
        </div>
        <!----->
        <div class="col-sm-2 col-xs-6">
            <div class="container2">
                <img src="assets/img/servicios/03_.png" class="image" alt="icono">
                <div class="overlay">
                    <div class="text"><a href="{{ url('eventos-empresariales') }}">Empresas</a></div>
                </div>
            </div>
        </div>
        <!----->
        <div class="col-sm-2 col-xs-6">
            <div class="container2">
                <img src="assets/img/servicios/03.png" class="image" alt="icono">
                <div class="overlay">
                    <div class="text"><a href="{{ url('jardines-boda') }}">Bodas</a></div>
                </div>
            </div>
        </div>
        <!----->
        <div class="col-sm-2 col-xs-6">
            <div class="container2">
                <img src="assets/img/servicios/04.png" class="image" alt="icono">
                <div class="overlay">
                    <div class="text"><a href="{{ url('spa') }}">Spa</a></div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="contactoFooterImg">
        <div class="col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4">
            <div class="col-sm-4 col-sm-offset-4">
                <img src="assets/img/ikaan-icono-color.png" class="img-responsive" alt="IconoCobtacto Formulario">
            </div>
        </div>
    </div>
</div>



































@stop
@section('pageJS') 
@stop