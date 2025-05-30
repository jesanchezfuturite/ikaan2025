@extends('layouts.front.master') 
{{-- Page Title --}}

@section('pageTitle') Contacto @stop
@section('pageCSS')
@stop
@section("content") 
    <!-- ------------------------------------------------------------------ -->
    <div class="sec1-ubicaciones">
        <div class="container">
            <div class="bannerTextoUbicaciones">
                <div class="col-sm-12">
                    <h1><span class="paquetesTituloBanner">CONTACTO</span></h1> 
                </div>
                <div class="col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 thumbnail"> 
                    <div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-2">
                        <img src="assets/img/ikaan-iconos.png" class="img-responsive" alt="Icono Blanco">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <div class="int_nuevo_iconos">
        <div class="container">
            <div class="col-sm-4 thumbnail mgy_lineasCont"> 
            	<img src="{{ url('assets/img/icono_01.png') }}" class="img-responsive mgy_iconos_new_co" alt="Hotel">
                <div class="mgy_color_textos">
                    <p class="mg1nombre">Hotel</p>
                    <p class="mg1nombre">
                        <a href="mailto:reservaciones@ikaan.mx">reservaciones@ikaan.mx</a>
                    </p>
                    <p class="mgy_tel_cel">
                        <a href="tel:+52 8183447761">Tel. 81 8344 7761</a>
                    </p>
                    <p class="mgy_tel_cel">
                        <a href="tel:+52 8181764075">Cel. 81 8176 4075</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-4 thumbnail mgy_lineasCont">
            	<img src="{{ url('assets/img/icono_02.png') }}" class="img-responsive mgy_iconos_new_co" alt="Bodas">
                <div class="mgy_color_textos">
                    <p class="mg1nombre">Bodas</p>
                    <p class="mg1nombre">
                        <a href="mailto:bodas@ikaan.mx">bodas@ikaan.mx</a>
                    </p>
                    <p class="mgy_tel_cel">
                        <a href="tel:+52 8183447761">Tel. 81 8344 7761</a>
                    </p>
                    <p class="mgy_tel_cel">
                        <a href="tel:+52 8116909009">Cel. 81 1690 9009</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-4 thumbnail mgy_lineasCont">
            	<img src="{{ url('assets/img/icono_03.png') }}" class="img-responsive mgy_iconos_new_co" alt="Eventos Empresariales">
                <div class="mgy_color_textos">
                    <p class="mg1nombre">Eventos Empresariales</p>
                    <p class="mg1nombre">
                        <a href="mailto:empresas@ikaan.mx">empresas@ikaan.mx</a>
                    </p>
                    <p class="mgy_tel_cel">
                        <a href="tel:+52 8183447761">Tel. 81 8344 7761</a>
                    </p>
                    <p class="mgy_tel_cel">
                        <a href="tel:+52 8130922240">Cel. 81 3092 2240</a>
                    </p>
                </div>
            </div>
        </div>        
    </div>
    <div class="espacioContacFooterUltimo">
        <div class="container">
            <form action="send.php" method="post">
                <div class="secFondoContactoContac">
                    <div class="col-sm-8 col-sm-offset-2 fonfoFondoFormCol">
                    <div class="col-sm-8 col-sm-offset-2 sec2FondoareaInputInput">
                        <input type="text" required name="nombre" placeholder="Nombre" >
                    </div>
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="col-sm-5 sec2FondoareaInputInput">
                            <input type="text" required name="email" placeholder="E-Mail">
                        </div>
                        <div class="col-sm-6 col-sm-offset-1 sec2FondoareaInputInput">
                            <input type="text" required name="telefono" placeholder="Teléfono" >
                        </div>
                    </div>

                    <div class="col-sm-8 col-sm-offset-2  col-xs-offset-0 sec2Fondo">
                        <select class="SelectMagaly" required name="asunto" onChange="mostrar(this.value);">
                            <option value="">Elige una Opción -----</option>
                            <option value="informes">Informes</option>
                            <option value="reservar">Reservar</option>
                            <option value="sugerencia">Sugerencia</option>
			    <option value="eventoempresariales">Eventos Empresariales</option>
                        </select>
                       
                    </div>
                    <div id="reservar" style="display: none;">
                        <!--Inicio de las fechas-->
                        <div class="CalendarioEntraSalida">
                            <div class="col-sm-8 col-sm-offset-2 col-xs-offset-0 sec2Fondo">
                                <div class="col-sm-5">
                                    <span class="textoCalendarM">
                                         <input type="text" name="fechaEntrada" placeholder="Fecha de Entrada" class="datepicker" id="datepicker" />

                                        <!--<input type="text" name="fechaEntrada" class="datepicker" placeholder="Fecha de Entrada" id="entrada" />-->
                                    </span>
                                </div>
                                <div class="col-sm-5 col-sm-offset-1">
                                    <span class="textoCalendarM">
                                        <input type="text" name="fechaSalida" placeholder="Fecha de Salida" class="datepicker2" id="datepicker2" />
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--Fin de las fechas-->
                        <div class="col-sm-8 col-sm-offset-2 col-xs-offset-0 sec2Fondo">
                            <div class="col-sm-5">
                                <input type="number" name="huespedes" placeholder="Huéspedes">
                            </div>
                            <div class="col-sm-5 col-sm-offset-1">
                                <input type="number"  name="cuartos" placeholder="Cuartos">
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-2 col-xs-offset-0 sec2Fondo">
                            <span class="porfavorIngrese">*Por favor ingrese número de Cuartos y Huéspedes</span>
                        </div>
                    </div>

                    <div class="col-sm-8 col-sm-offset-2 col-xs-offset-0 sec2Fondoarea">
                        <textarea rows="5" name="comentarios" required="required" placeholder="Comentarios Adicionales"></textarea>
                    </div>
                    <div class="col-sm-8 col-sm-offset-2 col-xs-offset-0 sec2Fondoarea">
                        <div class="g-recaptcha" data-sitekey="6Lf5pkYUAAAAAPNJ4RheE4XOY0Z6_1epvxqWpE1v"></div>
                    </div>

                    
                    <div class="col-sm-10 col-sm-offset-2 ComentariosEspacio">
                        <div class="col-sm-2">
                            <input type="submit" value="Enviar" class="button buttonServicios1 enviar">
                        </div>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
    <!---->
    <br>

    <div class="sec1Ubicaciones">
        <div class="container">
            <div class="col-sm-12">
            <div class="textoCol6ImagenUbicaciones">

                <div class="sec3TextoCol6Ubicaciones">
                    <span class="sec1Subtitulo1-2">UBICACIÓN</span>
                    <p>CARRETERA NACIONAL <span class="textoUbicacionesN">KM. 218</span> </p>
                    <p>Montemorelos, N.L.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!---->
    <div class="sec7">
        <div class="container">
            <div class="mapa-ubicacion">
                <div class="bg_maps">
                   <div class="hg_maps" id="mapa_cotizacion" > </div>
               </div>
            </div>  
        </div>      
    </div>
    <!-- ------------------------------------------------------------------ -->
@stop
@section('pageJS') 
<!-- Bootbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
</body>
</html>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<!-- <script src="jquery.ui.datepicker-es.js"></script> -->
<script src="js/gmaps.js"></script>
<script src="js/sucursales.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAX1pkPNu8_XHaTKtnMGyCqGclN6W8gPPQ&callback=initMap" type="text/javascript"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>


<script type="text/javascript">
    window.onload = function() {
      callCalendar();
    };
</script>
<script type="text/javascript">
    function mostrar(id) {
        if (id == "reservar") {
            $("#reservar").show();
            $("#informes").hide();
            $("#autonomo").hide();
            $("#paro").hide();
        }

        if (id == "informes") {
            $("#reservar").hide();
            $("#informes").show();
            $("#autonomo").hide();
            $("#paro").hide();
        }

        if (id == "sugerencia") {
            $("#reservar").hide();
            $("#informes").hide();
            $("#autonomo").show();
            $("#paro").hide();
        }

        if (id == "eventoempresariales") {
            $("#reservar").hide();
            $("#informes").hide();
            $("#autonomo").hide();
            $("#paro").show();
        }
    }
</script>
@stop