@extends('layouts.front.master') 
{{-- Page Title --}}

@section('pageTitle') Paquete Express @stop
@section('pageCSS')
@stop
@section("content") 
    <!-- ------------------------------------------------------------------ -->
    <div class="paqueteExpress"></div>
    <!---->
    <div class="section2_Spa">
        <div class="container">
            <div class="col-sm-12">
                <p class="tituloSpa">Paquete Express</p>
                <p class="parrafoSpa">Excelente opción para conocer Hotel Ikaan Villa Spa con tus familiares y amigos </p>
            </div>
        </div>
    </div>
    <!---->
    <div class="section_02_paqueteExpress">
        <div class="container">
            <div class="col-sm-10 col-sm-offset-1">
                <p class="parrafoSuites">
                    <b>Ikaan Villa Spa</b> es un hotel boutique todo incluído que está enfocado principalmente en la naturaleza, los servicios de spa y la dieta, por lo cual es un lugar ideal para ir a relajarte y descansar ya sea con tu pareja, tus amigos o incluso a solas.
                </p>
                <div class="col-sm-4 col-sm-offset-4">
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <div class="section03_paqueteExpress">
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2">
                <p class="parrafoSuites">
                    Incluye 8 horas de estancia en Hotel Ikaan Villa Spa<br> (Check in a las 10:00 a.m. Check out 6:00 p.m).
                </p>
                <p>
                    <ul class="lista">
                        <li>1 Snack de media mañana</li>
                        <li>1 Comida</li>
                        <li>1 Snack de media tarde</li>
                        <li>1 Masaje Sueco</li>
                        <li>Té después del masaje</li>
                        <li>Baño de Vapor</li>
                        <li>Uso de instalaciones de alberca, laberinto y terrazas</li>
                    </ul>
                </p>
                <div class="col-sm-4 col-sm-offset-4">
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <div class="section04_paqueteExpress">
        <div class="container">
            <div class="col-sm-10 col-sm-offset-1">
                <p class="parrafoSuites">
                    Estos costos incluyen por persona:
                </p>
                <div class="col-sm-7 pd0">
                    <div class="cuadroDe_precios">
                        <div class="col-sm-5">
                            <p class="texto_de_los_precios">
                                10:00 am a 6:00pm
                            </p>
                        </div>
                        <div class="col-sm-1">
                            <hr>
                        </div>
                        <div class="col-sm-5">
                            <p class="texto_de_los_precios">
                                $2,100 MXN
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 top">
                    <p class="col_regredar">
                        < <a href="{!! url('paquetes'); !!}"><button class="botn_de_regresar">Regresar a paquetes</button></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop
@section('pageJS') 
@stop