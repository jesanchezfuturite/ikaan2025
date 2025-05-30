@extends('layouts.front.master') 
{{-- Page Title --}}

@section('pageTitle') Paquete Plus @stop
@section('pageCSS')
@stop
@section("content") 
    <!-- ------------------------------------------------------------------ -->
    <div class="container-fluid pd0">
        <div class="col-sm-12 pd0">
            <div class="col-sm-9 pd0">
                <div class="banner-plus"></div>
            </div>
            <div class="col-sm-3 pd0">
                <div class="fondoSecBanner">
                    <p class="tituloJardin_bot_dos">
                        Plus
                    </p>
                    <p class="parrafoBlando_boda">
                        El plan perfecto para disfrutar de Hotel Ikaan Villa Spa con tu pareja
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <!---->
    <div class="section03_paqueteExpress">
        <div class="container">
            <div class="col-sm-10 col-sm-offset-1">
                <p class="parrafoSuites">
                    Disfruta de 2 noches de hospedaje en Hotel Ikaan Villa Spa, masaje sueco, reflexología, baño de vapor, alimentos, bebidas y snacks.
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
                <div class="col-sm-8 pd0">
                    <div class="cuadroDe_preciosVilla">
                        <div class="col-sm-3">
                            <p class="texto_de_los_precios">
                                Villas <br>(2 noches)
                            </p>
                        </div>
                        <div class="col-sm-1 pd0">
                            <hr>
                        </div>
                        <div class="col-sm-3">
                            <p class="texto_de_los_precios">
                                Sencilla<br>$ 5,700 MXN<br>
                            </p>
                        </div>
                        <div class="col-sm-1">
                            <hr>
                        </div>
                        <div class="col-sm-3">
                            <p class="texto_de_los_precios">
                                Doble<br>$ 4,700 MXN<br>
                            </p>
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-sm-8 topTopPrecios">
                    <div class="cuadroDe_preciosVilla">
                        <div class="col-sm-3">
                            <p class="texto_de_los_precios">
                                Villas suite <br>(2 noches)
                            </p>
                        </div>
                        <div class="col-sm-1 pd0">
                            <hr>
                        </div>
                        <div class="col-sm-3">
                            <p class="texto_de_los_precios">
                                Sencilla<br>$ 7,200 MXN<br>
                            </p>
                        </div>
                        <div class="col-sm-1">
                            <hr>
                        </div>
                        <div class="col-sm-3">
                            <p class="texto_de_los_precios">
                                Doble<br>$ 5,800 MXN<br>
                            </p>
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-sm-8 topTopPrecios">
                    <div class="cuadroDe_preciosVilla">
                        <div class="col-sm-3">
                            <p class="texto_de_los_precios">
                                Villas deluxe  <br>2 noches)
                            </p>
                        </div>
                        <div class="col-sm-1 pd0">
                            <hr>
                        </div>
                        <div class="col-sm-3">
                            <p class="texto_de_los_precios">
                                Sencilla<br> $ 7,200 MXN<br>
                            </p>
                        </div>
                        <div class="col-sm-1">
                            <hr>
                        </div>
                        <div class="col-sm-3">
                            <p class="texto_de_los_precios">
                                Doble<br>$ 5,800 MXN<br>
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
    <!-- ------------------------------------------------------------------ -->
@stop
@section('pageJS') 
@stop