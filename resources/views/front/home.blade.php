@extends('layouts.front.master') 
{{-- Page Title --}}

@section('pageTitle') Home @stop
@section('pageCSS')
@stop
@section("content") 
	<div class="home_slider">
        <div class="sec1-a">
            <div class="container">
                <div class="col-sm-7"> </div>
                <div class="col-sm-5 form-contacto">

                    <form action="sendIndex.php" method="post">
                        <div class="col-sm-12 text-center">
                            <img src="{{ url('assets/img/icono1.png') }}" class="ico-ikaan" alt="Icono Formulario">
                        </div>
                        <p class="form-texto">
                            Reserva <span class="form-texto1"> Ahora</span>
                        </p>
                        <p>
                            <span class="form-texto2">Selecciona tus días </span>
                        </p>
                        <div class="col-xs-6">
                            <div class="IndexEntraSalida1">
                                <input type="text" name="fechaEntrada" placeholder="Entrada" class="datepicker" id="datepicker" required />
                            </div>
                        </div>
                        <div class="col-xs-6 nuevosFor">
                            <div class="IndexEntraSalida1">
                                <input type="text" name="fechaSalida" placeholder="Salida" class="datepicker2" id="datepicker2" required /><br><br>
                            </div>
                        </div>
                        <div class="col-sm-12 disp-ib">
                            <input type="text" id="fname" required name="nombre" placeholder="Nombre"><br>

                            <input type="text" required name="telefono" placeholder="Teléfono" max="12"><br>
                            <input type="text" id="fname" required name="email" placeholder="Correo"><br>
                        </div>
                        <div class="col-sm-12"><br>
                        	<div class="captcha_wrapper">
                                <div class="g-recaptcha" data-sitekey="6LfMo6wUAAAAAC3VtgTicqCCC5_2FX5bhpSGNA9C"></div>
                            </div>
                            <button type="submit" id="botonEnviar23" class="button23 buttonServicios10 enviar">Reservar</button>
                            <br><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
    <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
            <img src="{{ url('assets/img/Barra_ikan.png') }}" class="img-responsive imgNuevo" alt="Barra Ikaan">
        </div>
    </div>
    <!-- ------------------------------------------------------------------ -->
    <div class="h-sec2">
        <div class="container">
            <div class="col-sm-12">
                <div class="sec1Titulo">
                	<h2><span class="sec1Titulo1-1">IKAAN VILLA SPA</span> </h2>
                	<h1><span class="sec1Titulo1-1-h2">UN HOTEL SPA CERCA DE MONTERREY</span> </h1>
                </div>
            </div>
            <div class="col-sm-5">
                <h3>
                    <b>La Magia</b> de la Naturaleza está en <strong class="hotelNewSEO"> Hotel Ikaan Villa Spa</strong>
                </h3>
                <p>
                    Hotel Ikaan Villa Spa es un hotel enfocado a la naturaleza y a un estilo de vida holístico, relajado y natural. El propósito principal de Hotel Ikaan Villa Spa, es que  nuestros huéspedes experimenten la paz física y mental durante su estadía, por medio de diferentes actividades de relajación, servicios de spa y un programa culinario enfocado a la alimentación balanceada.
                </p>
                <p>
                    La calidez y atención que recibirás en Hotel Ikaan Villa Spa, te harán sentir en casa, honrando al significado náhuatl de nuestro nombre, que significa, casa de familia.
                </p>

                <h3>Nuestro Hotel Ikaan Villa Spa</h3>
                <p>
                    Hotel Ikaan Villa Spa es un hotel todo incluido y exclusivo para mayores de edad. Los servicios que se ofrecen en Hotel Ikaan Villa Spa son configurados según los intereses del huésped, por lo que todas nuestras amenidades son personalizables y opcionales.
                </p>
                <p>
                    Además de nuestros servicios de hospedaje, también contamos con servicios para eventos sociales como bodas, bautizos, cumpleaños y reuniones corporativas y de integración.
                </p>
            </div>
            <div class="col-sm-6 col-sm-offset-1 col-xs-12 imgMovilTamanoCompleto">
                <center><img src="{{ url('assets/img/home/ikaan-arbol.jpg') }}" class="img-responsive" alt="árbol">
                </center>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------------ -->
    <div class="sec3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="imagen"></div>
                    </div>
                </div>
                <div class="col-sm-4 item">
                    <div class="producto prod-first">
                        <img src="{{ url('assets/img/home/M_11.jpg') }}" title="Plan de alimentos personalizado" alt="fruta cortada sobre una mesa de cristal" class="img-responsive">
                        <div class="mask">
                            <h2>Plan de Alimentos</h2>
                            <p>
                                Al reservar cualquiera de nuestros paquetes de hospedaje, disfruta de un plan de alimentos personalizable de acuerdo a tus gustos y preferencias. Contamos con dieta regular, gastro-amable y detox.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 item2">
                    <div class="producto prod-first">
                        <img src="{{ url('assets/img/home/M_2.jpg') }}" title="Conéctate con la naturaleza" alt="ambiente natural para conectar" class="img-responsive lazy">
                        <div class="mask">
                            <h2>Recorrido Forestal</h2>
                            <p>
                                En Hotel Ikaan Villa Spa, queremos que te conectes con la naturaleza y disfrutes de un recorrido forestal por nuestros hermosos jardines para despejar tu mente y relajarte.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 item3">
                    <div class="producto prod-first">
                        <img src="{{ url('assets/img/home/1Home.jpg') }}" title="Espacios para meditar" alt="espacios para meditar y descansar" class="img-responsive">
                        <div class="mask">
                            <h2>Meditación </h2>
                            <p>
                                Relájate y practica distintas actividades recreativas al hospedarte con nosotros. Contamos con actividades grupales, laberinto de meditación, yoga y más.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 item4">
                    <div class="producto prod-first">
                        <img src="{{ url('assets/img/home/M_4.jpg') }}"  class="img-responsive" title="Amplia piscina rodeada por la naturaleza" alt="Amplia piscina rodeada por la naturaleza">
                        <div class="mask">
                            <h2>Piscina</h2>
                            <p>
                                Disfruta de nuestra amplia piscina rodeado de naturaleza, una vista increíble y acceso rápido a áreas comunes y nuestro restaurant.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 item5">
                    <div class="producto prod-first">
                        <img src="{{ url('assets/img/home/M_5.jpg') }}" title="Tu boda en Ikaan" class="img-responsive" alt="Decoración de boda al aire libre">
                        <div class="mask">
                            <h2>Tu Boda en Ikaan</h2>
                            <p>
                                En Hotel Ikaan Villa Spa contamos con servicio de eventos sociales y bodas. Celebra ese día tan esperado en nuestras terrazas y jardines y vive una experiencia inolvidable.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 item6">
                    <div class="producto prod-first">
                        <img src="{{ url('assets/img/home/M_6.jpg') }}" class="img-responsive" title="Disfruta de nuestra fogata" alt="Fogata a la luz de la estrellas">
                        <div class="mask">
                            <h2>Fogata</h2>
                            <p>
                                Disfruta de una acogedora noche con tus amigos o pareja conversando alrededor de nuestra fogata.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------------ -->
    <div class="sec4">
        <div class="container-fluid">
            <div class="sec4Titulo">
                <h2 class="sec4Titulo1-1">IKAAN VILLA SPA</h2>
                <p class="sec4Titulo1-2">UN HOTEL SPA CERCA DE MONTERREY</p>
            </div>
            <div class="col-sm-12 tasa-flor">
                <img src="{{ url('assets/img/home/Flower_Cup_800.png') }}"  class="img-responsive" alt="una tasa y una flor">
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------------ -->
    <div class="sec5">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="sec1Titulo">
                <a href="{{ url('servicios') }}"> <p><span class="sec1Titulo1-1">SERVICIOS</span><br></p></a>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="col-sm-5">
                    <div class="col-sm-12 hospeSer-linea">
                        <div class="col-md-1 col-md-offset-3 thumbnail">
                            <p class="sec5Titulo1-1"><span class="imagen1"></span></p>
                        </div>
                        <div class="col-md-3 thumbnail">
                            <a href="{{ url('hospedaje') }}"><p class="sec5Titulo1-1">Hospedaje</p></a>
                        </div>
                    </div>
                    <div class="col-sm-12 textoHospedaje">
                        <p><span class="sec5-parrafo">
                            Hotel Ikaan Villa Spa es el lugar ideal para descansar y experimentar la magia de convivir con la naturaleza en las más cómodas instalaciones. Actualmente, contamos con una gran variedad de paquetes y tres tipos de suites: Villa, Villa Deluxe y Villa Suite. Cada una de ellas cuenta con una o dos habitaciones, sala, comedor, aire acondicionado y terrazas, todas decoradas cuidadosamente para hacerte sentir como en casa rodeado de los jardines más bellos.

                        </span></p>
                        <p>
                            Adicionalmente, los huéspedes en Hotel Ikaan Villa Spa reciben un plan alimenticio personalizado, así como acceso a todas las actividades holísticas y servicios de spa.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <img src="{{ url('assets/img/home/sec5-1.png') }}" class="img-responsive w100" title="Hospédate en Ikaan" alt="Sillón al aire libre">
                </div>
            </div>
            <div class="col-sm-12 colorBodas">
                <div class="col-sm-6 col-sm-push-6">
                    <div class="col-sm-12 sec5Bodas">
                        <div class="col-md-1 col-md-offset-1 thumbnail">
                            <p class="sec5Titulo1-1"><span class="imagen1"></span></p>
                        </div>
                        <div class="col-md-3 thumbnail">
                            <a href="{{ url('jardines-boda') }}"><p class="sec5Titulo1-1">Bodas</p></a>
                        </div>
                        <!--<p class="sec5Titulo1-1"><span class="imagen2"></span>Bodas</p>-->
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-9 parrafoCelular">
                            <p>
                               En Hotel Ikaan Villa Spa ofrecemos paquetes de bodas personalizados ya que contamos con un salón de eventos con una capacidad máxima de 200 personas y hermosos jardines que serán ideales para hacer de tu boda un evento inolvidable.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-pull-6">
                    <img src="{{ url('assets/img/home/sec5-2.jpg') }}" class="img-responsive w100" title="Paquete para bodas" alt="Sesión de novios al aire libre">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6 sec5Titulo2">
                    <div class="col-sm-12">
                        <div class="col-md-1 col-md-offset-2 thumbnail">
                            <p class="sec5Titulo1-1"><span class="imagen1"></span></p>
                        </div>
                        <div class="col-md-7 thumbnail">
                            <a href="{{ url('eventos-empresariales') }}"><p class="sec5Titulo1-1">Eventos Empresariales</p></a>
                        </div>
                        <!--<p class="sec5Titulo1-1"><span class="imagen1"></span>Eventos Empresariales</span></p>-->
                    </div>
                    <div class="col-sm-12 textoHospedaje">
                        <p><span class="sec5-parrafo">
                            En Hotel Ikaan Villa Spa contamos con paquetes para empresas y corporativos que incluyen salas de juntas, salón para conferencias, actividades de integración y demás.
                        </span></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="{{ url('assets/img/home/sec5-3.jpg') }}"  class="img-responsive w100" title="Eventos empresariales" alt="Reunión de resultados ejecutivos">
                </div>
            </div>
            <div class="col-sm-12 colorBodas">
                <div class="col-sm-6 col-sm-push-6">
                    <div class="col-sm-12 sec5Bodas">
                        <div class="col-md-1 col-md-offset-1 thumbnail">
                            <p class="sec5Titulo1-1"><span class="imagen1"></span></p>
                        </div>
                        <div class="col-md-3 thumbnail">
                            <a href="{{ url('spa') }}"><p class="sec5Titulo1-1">SPA</p></a>
                        </div>
                        <!--<p class="sec5Titulo1-1"><span class="imagen2"></span>SPA</p></span>-->
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-8 col-sm-offset-1 parrafoCelular">
                            <p>
                               El spa es uno de los servicios característicos de Hotel Ikaan Villa Spa, ya que contamos con masajistas profesionales y altamente capacitados para realizar diferentes masajes y tratamientos
                            </p>
                            <p>
                                Durante tu estancia en Hotel Ikaan Villa Spa, podrás disfrutar de estos servicios en tu habitación, al aire libre o en el área designada de spa.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-pull-6">
                    <img src="{{ url('assets/img/home/sec5-4.jpg') }}" class="img-responsive w100" title="Área de spa" alt="Spa para parejas">
                </div>
            </div>
        </div>
    </div>
    <div class="sec6">
        <div class="container-fluid">
            <div class="sec6Informacion">
                <div class="col-sm-offset-3 col-sm-8">
                    <p>
                        <span>"Ven a vivir la magia</span>
                    </p>
                    <p>
                        <span>de la naturaleza"</span>
                    </p>
                </div>
                <div class="col-sm-offset-3 col-sm-8">
                    <div class="contactoN">
                        <h2><a href="{{ url('contacto') }}">Contáctanos</a> </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------------ -->
    <div class="sec7">
        <div class="container-fluid">
            <div class="mapa-ubicacion">
                <div class="bg_maps">
                   <div class="hg_maps" id="mapa_cotizacion"> </div>
               </div>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------ -->
@stop
@section('pageJS') 
@stop