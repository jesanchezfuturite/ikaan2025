@extends('layouts.front.master') 
{{-- Page Title --}}

@section('pageTitle') Paquetes @stop
@section('pageCSS')
@stop
@section("content") 
    <!-- ------------------------------------------------------------------ -->             
    <div class="banner-paquetes">
        <div class="container">
        	<div class="bannerTextoUbicaciones">
        		<div class="col-sm-12">
        			<h1><span class="paquetesTituloBanner">PAQUETES</span></h1> 
        		</div>
                <div class="col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 thumbnail"> 
                    <div class="col-sm-4 col-sm-offset-4">
                        <img src="assets/img/ikaan-iconos.png" class="img-responsive" alt="Icono Blanco">
                    </div>
                </div>
        		<div class="col-sm-6 col-xs-12 col-sm-offset-3">
        			<p><span class="textoBannerHospedaje">
        				 En Hotel Ikaan Villa Spa contamos con una amplia variedad de paquetes de hospedaje y eventos sociales, dirigidos a todos aquellos interesados en vivir la experiencia Hotel Ikaan Villa Spa.
        			</span></p>
        		</div>
        	</div>
        </div>
    </div>
    <!--Barra-->
    <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
            <img src="assets/img/Barra_ikan.png" class="img-responsive imgNuevo" alt="Barra_ikan">
        </div>
    </div>
    <!---->
    <div class="container">
    	<div class="TituloNosotros">
    		<div class="col-sm-10 col-sm-offset-1">
    			<div class="col-sm-2 col-xs-2">
    				<img src="assets/img/ornament-1.png" class="img-responsive" alt="ornant">
    			</div>
    			<div class="col-sm-8 col-xs-8"><h1 class="tituloDEHospedaje">Elige el paquete ideal </h1></div>
    			<div class="col-sm-2 col-xs-2">
    				<img src="assets/img/ornament-2.png" class="img-responsive" alt="orn">
    			</div>
    		</div>
    	</div>
    </div>
    <!---->

    <div class="sec2Paquetes123"> 
        <!--<div class="container">
            <div class="col-sm-6">
                 <p><span class="textoSec2Paquetes">Paquete Express</span></p>
            </div> 
            <div class="col-sm-6">
                <p><span class="textoSec2Paquetes">Paquete Villa & Spa</span> </p>
            </div>   
        </div>-->
        <div class="container">
            <div class="col-sm-6">
                <p><h3 class="textoSec2Paquetes">Paquete Express</h3></p>
                <div class="item3">
                <a href="{{ url('paquete-express') }}">
                    <div class="producto prod-first">
                        <img src="assets/img/servicios/paquetes/2.jpg" class="img-responsive" alt="paq-serv">
                        <div class="maskPaquetes"> 
                            <div class="col-sm-12">
                                <!--<img src="assets/img/home/Barra_ikan.png" class="img-responsive imgNuevo">-->
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            </div>
            <div class="col-sm-6">
                    <p><h3 class="textoSec2Paquetes">Paquete Villa & Spa</h3> </p> 
                <div class="item3">   
                    <a href="{{ url('paquete-villa-spa') }}">
                    <div class="producto prod-first">
                        <img src="assets/img/servicios/paquetes/1.jpg" class="img-responsive" alt="serv">
                        <div class="maskPaquetes"> 
                            <div class="col-sm-12">
                                <!--<img src="assets/img/home/Barra_ikan.png" class="img-responsive imgNuevo">-->
                            </div>
                        </div>   
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
	<div class="sec2Paquetes123">
        <!--<div class="container">
            <div class="col-sm-6">
                 <p><span class="textoSec2Paquetes">Paquete Plus</span></p>
            </div> 
            <div class="col-sm-6">
                <p><span class="textoSec2Paquetes">Paquete Premium</span> </p>
            </div>   
        </div>-->
		<div class="container">
            <div class="col-sm-6">
                 <p><h3 class="textoSec2Paquetes">Paquete Plus</h3></p>
                 <div class="item3">
                    <a href="{{ url('paquete-plus') }}">
                        <div class="producto prod-first">
                            <img src="assets/img/servicios/paquetes/3.jpg" class="img-responsive" alt="paq-serv">
                            <div class="maskPaquetes"> 
                                <div class="col-sm-12">
                                    <!--<img src="assets/img/home/Barra_ikan.png" class="img-responsive imgNuevo">-->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
			<div class="col-sm-6">
                <p><h3 class="textoSec2Paquetes">Paquete Premium</h3> </p>	
                <div class="item3">
    			    <a href="{{ url('paquete-premium') }}">
        			    <div class="producto prod-first">
        			        <img src="assets/img/servicios/paquetes/4.jpg" class="img-responsive" alt="4-paquetes">
        			        <div class="maskPaquetes"> 
        					    <div class="col-sm-12">
        					    </div>
        			        </div>   
        			    </div>
                    </a>
                </div>
			</div>
		</div>
	</div>

    <!---->
    <div class="container">
    	<div class="TituloNosotros">
    		<div class="col-sm-10 col-sm-offset-1">
    			<div class="col-sm-2 col-xs-2">
    				<img src="assets/img/ornament-1.png" class="img-responsive" alt="noso">
    			</div>
    			<div class="col-sm-8 col-xs-8"><h3 class="tituloDEHospedaje">Paquete Eventos</h3></div>
    			<div class="col-sm-2 col-xs-2">
    				<img src="assets/img/ornament-2.png" class="img-responsive" alt="nos">
    			</div>
    		</div>
    	</div>
    </div>
    <!---->

	<div class="sec3PaquetesFotos">
		<div class="container">
			<div class="col-sm-12">
                <div class="textoPrueba">
                	<a href="{{ url('eventos-empresariales') }}">Paquete Empresa</a>
                </div>
				<img src="assets/img/servicios/paquetes/7.jpg" class="img-responsive" alt="paque-serv">
			</div>
		</div>
	</div>
	<div class="sec3PaquetesFotos1">
		<div class="container">
			<div class="col-sm-12">
                <div class="textoPrueba1">
                	<a href="{{ url('jardines-boda') }}">Eventos Sociales</a>
                </div>
				<img src="assets/img/servicios/paquetes/8.jpg" class="img-responsive" alt="paqu-8">
			</div>
		</div>
	</div>
    <!-- ------------------------------------------------------------------ -->
@stop
@section('pageJS') 
@stop