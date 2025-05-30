@extends('layouts.front.master') 
{{-- Page Title --}}

@section('pageTitle') Amenidades @stop
@section('pageCSS')
@stop
@section("content") 
    <!-- ------------------------------------------------------------------ -->
    <div class="sec1-amedidades"> 
	    <div class="container">
	        <div class="bannerTextoUbicaciones">
	        	<div class="col-sm-12">
	        		<h1><span class="paquetesTituloBanner">AMENIDADES</span></h1> 
	        	</div>
	        	<div class="col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4"> 
	        		<div class="col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4">
	        			<img src="{{ url('assets/img/ikaan-iconos.png') }}" class="img-responsive" alt="Icono Blanco">
	        		</div>
	        	</div>
	        	<div class="col-sm-12 col-xs-12">
	        		<p class="amenidades2-textoN">Actividades para alcanzar la plenitud física y mental.</p>
	        	</div>
	        </div>
	    </div>
	</div>
	<!--Barra--> 
	    <div class="container">
	    	<div class="col-sm-10 col-sm-offset-1">
	    		<img src="{{ url('assets/img/Barra_ikan.png') }}" class="img-responsive imgNuevo" alt="vapor">
	    	</div>
	    </div>
		<!--Parrafo--> 
		<div class="parrafoA-new">
			<div class="container">
				<div class="col-sm-8 col-sm-offset-2">
					<p><span class="parrafoAB">
						Adicional a nuestros servicios de hospedaje y spa, en <span class="parrafoAmenidades">Hotel Ikaan Villa Spa</span> también contamos con una gran variedad de actividades recreativas,
						con la finalidad de hacer de tu experiencia en <span class="parrafoAmenidades">Hotel Ikaan Villa Spa</span> algo
						único y relajante.
						</span>
					</p><br><br>
				</div>
			</div>
		</div>
		<!--Servicios Yoga, Recorrido Forestal, Piscina-->
		<div class="sec2-amenidades-new2">
			<div class="container imgBorderAme1New-3fotos">
				<div class="col-sm-3 disenoCelular">
					<img src="{{ url('assets/img/amenidades/1.png') }}" class="img-responsive sec2-amenidades-new-imagen1">
					<div class="parrafoTextoSec2Amen2">
						<p class="parrafoTextoSec2Amen2-texto">Yoga</p>
						<p>
							Vive la experiencia de cultivar el cuerpo y la mente por medio de esta práctica de meditación.
						</p>
						<p>
							El yoga es una gran opción si lo que buscas es relajarte o un lugar para conectar con tu paz interior, ya sea que nunca hayas practicado el yoga o si ya tienes experiencia.
						</p>
					</div>
				</div>
				<div class="col-sm-3 disenoCelular">
					<img src="{{ url('assets/img/amenidades/2.png') }}" class="img-responsive sec2-amenidades-new-imagen">
					<div class="parrafoTextoSec2Amen2">
						<p class="parrafoTextoSec2Amen2-texto">Recorrido forestal</p>
						<p>
							Experimenta la paz física y mental a través de un recorrido por nuestras más de 26 hectáreas de hermosos jardines donde podrás salir de la rutina y encontrarte en un ambiente de paz.
						</p>
					</div>
				</div>
				<div class="col-sm-3 disenoCelular">
					<img src="{{ url('assets/img/amenidades/3.png') }}" class="img-responsive sec2-amenidades-new-imagen1">
					<div class="parrafoTextoSec2Amen2">
						<p class="parrafoTextoSec2Amen2-texto">Piscina</p>
						<p>
							Disfruta de una tarde divertida en compañía de tus amigos, familiares o pareja en nuestra piscina, mientras observas maravillosas vistas de la naturaleza.
						</p>
					</div>
				</div>
				<div class="col-sm-3 disenoCelular">
					<img src="{{ url('assets/img/amenidades/4.png') }}" class="img-responsive sec2-amenidades-new-imagen">
					<div class="parrafoTextoSec2Amen2">
						<p class="parrafoTextoSec2Amen2-texto">Canoas</p>
						<p>							
							Vive una nueva experiencia y disfruta de un panorama espectacular y natural, con su pareja o familia en una de nuestras canoas.
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--Actividades de Meditación-->	
		<div class="sec3-lineaMeditacion-new002">
			<div class="container">
				<div class="col-sm-6 col-sm-offset-3">
					<p class="sec3-lineaMeditacion-newTexto">Actividades de Meditación</p>
					<img src="{{ url('assets/img/Barra_ikan.png') }}" class="img-responsive imgNuevo" alt="Barra">
				</div>
			</div>
		</div>
		<div class="sec3ImgFondoAmenidades">
			<div class="container">
				<div class="col-sm-12">
					<div class="col-sm-4">
						<img src="{{ url('assets/img/amenidades/4.jpg') }}" class="img-responsive" alt="Fogata">
						<div class="imgenNew2-amenin">
							<p class="texto-sec3-ameni2">Fogata</p>
							<img src="{{ url('assets/img/Barra_ikan.png') }}" class="img-responsive imgenNew2-ameninFoto" alt="Barra">
							<p class="sec3-parrafo-amenidades2">
								Pasa un momento relajante junto a tus amigos o una velada romántica al lado de tu pareja junto a nuestra fogata de forma segura.
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<img src="{{ url('assets/img/amenidades/5.jpg') }}" class="img-responsive" alt="Recorrido">
						<div class="imgenNew2-amenin">
							<p class="texto-sec3-ameni2">Meditación</p>
							<img src="{{ url('assets/img/Barra_ikan.png') }}" class="img-responsive imgenNew2-ameninFoto" alt="Barra">
							<p class="sec3-parrafo-amenidades2">
								Ponte en contacto con la naturaleza mientras despejas tu mente en un ambiente de total tranquilidad.
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<img src="{{ url('assets/img/amenidades/6.jpg') }}" class="img-responsive" alt="Meditación">
						<div class="imgenNew2-amenin">
							<p class="texto-sec3-ameni2">Laberinto</p>
							<img src="{{ url('assets/img/Barra_ikan.png') }}" class="img-responsive imgenNew2-ameninFoto" alt="Barra">
							<p class="sec3-parrafo-amenidades2">
								Camina por nuestro laberinto zen y disfruta de estar rodeado por nuestros bellos jardines.
							</p>
						</div>
					</div>
				</div>
			</div><br>
		</div>
		<!--Servicio SPA-->
		<div class="sec3-lineaMeditacion-new002Spa">
			<div class="container">
				<div class="col-sm-6 col-sm-offset-3">
					<p class="sec3-lineaMeditacion-newTexto">Servicio de Spa</p>
						<img src="{{ url('assets/img/Barra_ikan.png') }}" class="img-responsive imgNuevo" alt="Barra">
				</div>
			</div>
		</div>
		<div class="sec3ImgFondoAmenidades2">
			<div class="container">
				<div class="col-sm-12">
					<div class="col-sm-4">
						<img src="{{ url('assets/img/amenidades/masajes2.jpg') }}" class="img-responsive" alt="Fogata">
						<div class="imgenNew2-amenin">
							<p class="texto-sec3-ameni2">Masajes</p>
							<img src="{{ url('assets/img/Barra_ikan.png') }}" class="img-responsive imgenNew2-ameninFoto" alt="Barra">
							<p class="sec3-parrafo-amenidades2">
								Contamos con masajistas profesionales capacitados para realizar diferentes masajes y tratamientos.
								Puedes elegir entre varios tipos de masajes como sueco, descontracturante, exfoliante, con piedras calientes, faciales, chocolaterapia y reflexología.
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<img src="{{ url('assets/img/amenidades/hidromasaje.jpg') }}" class="img-responsive" alt="Hidromasaje">
						<div class="imgenNew2-amenin">
							<p class="texto-sec3-ameni2">Hidromasaje</p>
							<img src="{{ url('assets/img/Barra_ikan.png') }}" class="img-responsive imgenNew2-ameninFoto" alt="Barra">
							<p class="sec3-parrafo-amenidades2">
								Reduce la tensión física y el estrés y siéntete renovado gracias a las sensaciones de serenidad que se experimentan dentro de esta bañera, la cual te dará un relajante masaje con agua cálida.
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<img src="{{ url('assets/img/amenidades/vapor.jpg') }}" class="img-responsive" alt="vapor">
						<div class="imgenNew2-amenin">
							<p class="texto-sec3-ameni2">Vapor</p>
							<img src="{{ url('assets/img/Barra_ikan.png') }}" class="img-responsive imgenNew2-ameninFoto" alt="Barra">
							<p class="sec3-parrafo-amenidades2">
								Durante tu estancia en Hotel Ikaan Villa Spa, podrás disfrutar del baño de vapor, el cual te ayudará a relajarte, mejorará la apariencia de tu piel, te dará una limpieza profunda y eliminarás toxinas y minerales pesados.
							</p>
						</div>
					</div>
				</div>
			</div><br>
		</div>
		<!--Seccion almohada-->
		<div class="sec-almohada">
			<div class="container-fluid">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="img-almohada"></div>
				</div>
				<div class="col-sm-6">
					<p class="tipos_almohadas">
						CONTAMOS CON DIFERENTES TIPOS DE ALMOHADAS PARA ASEGURAR TU DESCANSO.
					</p>
					<p class="menu_tipo_almo">Menú de almohadas</p>
						<table class="table">
						  <thead>
						    <tr>
						      <th scope="col"></th>
						      <th scope="col"  class="sec1_almohadas_tips">Suavidad</th>
						      <th scope="col"  class="sec1_almohadas_tips">Complexión</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td class="sec1_almohadas_tips">Megliere Suave</td>
						      <td><span class="relleno">&#x25CF; &#x25CF; &#x25CF; &#x25CF; &#x25CF;</span> </td>
						      <td class="sec1_almohadas_tips">Delgada</td>
						    </tr>
						    <tr>
						      <td class="sec1_almohadas_tips">Luxury</td>
						      <td><span class="relleno">&#x25CF; &#x25CF; &#x25CF; &#x25CF;</span><span class="puntoVacio"> &#x25CB;</span> </td>
						      <td class="sec1_almohadas_tips">Media</td>
						    </tr>
						    <tr>
						      <td class="sec1_almohadas_tips">Down Sintético (Medio)</td>
						      <td><span class="relleno">&#x25CF; &#x25CF; &#x25CF;</span><span class="puntoVacio"> &#x25CB; &#x25CB;</span></td>
						      <td class="sec1_almohadas_tips">Media</td>
						    </tr>
						    <tr>
						      <!--<th scope="row">2</th>-->
						      <td class="sec1_almohadas_tips">Down Sintético (Plus)</td>
						      <td><span class="relleno">&#x25CF; &#x25CF; </span><span class="puntoVacio"> &#x25CB; &#x25CB; &#x25CB;</span></td>
						      <td class="sec1_almohadas_tips">Robusto</td>
						    </tr>
						  </tbody>
						</table>
				</div>
			</div>
		</div>
		<!--Plan de Alimentación-->
		<div class="sec3-lineaMeditacion-new">
			<div class="container">
				<div class="col-sm-6 col-sm-offset-3">
					<p class="sec3-lineaMeditacion-newTexto">Plan de Alimentación</p>
					<img src="{{ url('assets/img/Barra_ikan.png') }}" class="img-responsive imgNuevo" alt="Barra">
				</div>
			</div>
		</div>
		<div class="secAmeImg8">
			<div class="container">
				<div class="col-sm-4 item02">
				    <div class="capa2-newnew"><p><span class="secAmeImg8Texto">Dieta</span><br>Regular</p></div>
				    <br><br>
				    <div class="producto02 prod-first02">
				    	<img src="{{ url('assets/img/amenidades/7.jpg') }}" class="img-responsive" alt="Dieta">
	                    <div class="mask02">  
	                        <!--<h2>Plan de Alimentos</h2> --> 
	                        <p>
	                        </p>
	                    </div> 
					</div>
				</div>
				<div class="col-sm-4 item02">
				    <div class="capa2-newnew"><p><span class="secAmeImg8Texto">Dieta</span> <br>Gastro Amable</p></div>
				    <br><br>
				    <div class="producto02 prod-first02">
				    	<img src="{{ url('assets/img/amenidades/8.jpg') }}" class="img-responsive" alt="gastro-amable">
		                <div class="mask02">  
		                    <!--<h2>Plan de Alimentos</h2> --> 
		                    <p>
		                    </p>
		                </div> 
					</div>
				</div>
				<div class="col-sm-4 item02">
				    <div class="capa2-newnew"><p><span class="secAmeImg8Texto">Dieta</span><br>Detox </p></div>
				    <br><br>
				    <div class="producto02 prod-first02">
				    	<img src="{{ url('assets/img/amenidades/9.jpg') }}" class="img-responsive" alt="Dieta Detox">
		                <div class="mask02">  
		                    <!--<h2>Plan de Alimentos</h2> --> 
		                    <p>
		                    </p>
		                </div> 
					</div>
				</div>
			</div>
		</div>
		<!---->
		<div class="linea">
			<div class="container">
				<div class="col-sm-8 col-sm-offset-2">
					<hr>
				</div>
			</div>
		</div>
		<div class="container">
	<div class="contactoFooterImg">
		<div class="col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4">
			<div class="col-sm-4 col-sm-offset-4">
				<img src="{{ url('assets/img/ikaan-icono-color.png') }}" class="img-responsive" alt="IconoCobtacto Formulario">
			</div>
		</div>
	</div>
</div>
    <!-- ------------------------------------------------------------------ -->
@stop
@section('pageJS') 
@stop