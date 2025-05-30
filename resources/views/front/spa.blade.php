@extends('layouts.front.master') 
{{-- Page Title --}}

@section('pageTitle') Spa @stop
@section('pageCSS')
@stop
@section("content") 
    <!-- ------------------------------------------------------------------ -->      
    <div class="banner-spa">
        <div class="container">
        	<div class="bannerTextoUbicaciones">
        		<div class="col-sm-12">
                    <h1><span class="titulo_spa_nuevo">
                        LOS MEJORES TRATAMIENTOS Y MASAJES<br> DE SPA EN HOTEL IKAAN VILLA SPA
                    </span></h1> 
        		</div>
                <div class="col-sm-10 col-sm-offset-1 thumbnail"> 
                    <hr>
                </div>
        		<div class="col-sm-6 col-xs-12 col-sm-offset-3">
        			<p><span class="textoBannerHospedaje">
        				En nuestro spa podrás encontrar una gran variedad de masajes, terapias y tratamientos relajantes exclusivos, para hacerte sentir de lo mejor durante tu estancia.
        			</span></p>
        		</div>
        	</div>
        </div>
    </div>
    <div class="galerias_de_fotos_spa">
        <div class="container">
            <div class="col-sm-12 pad_bottom_galFotos">
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto01.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Alivia el dolor y la tensión muscular, relaja los músculos y elimina el estrés y la ansiedad, brindando un alto grado de bienestar mental.
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">Masaje de  espalda, brazos y cuello</p>
                </div>
                <!----->
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto02.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Moviliza de forma suave la circulación, favoreciendo la eliminación de líquidos o de sustancias acumuladas en los tejidos del cuerpo.
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">Masaje drenaje linfático</p>
                </div>
                <!----->
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto03.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">Favorece la eliminación de la grasa localizada, mientras que moldea el contorno de tu figura.</div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">Masaje Reductivo</p>
                </div>
            </div>
            <!------------------------>
            <div class="col-sm-12 pad_bottom_galFotos">
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto04.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Consigue una piel renovada y tonificada al eliminar las células muertas de tu piel. 
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">
                        Masaje húmedo exfoliante
                    </p>
                </div>
                <!----->
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto05.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Relaja la musculatura y disuelve las contracturas producidas por el estrés, exceso de ejercicio y malas posturas, brindando un profundo descanso.
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">Masaje Descontracturante</p>
                </div>
                <!----->
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto06.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Mejora la microcirculación sanguínea, reduce la flacidez de la musculatura, y elimina la retención de líquidos, brindando un resultado de bienestar.
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">
                        Masaje para pies y piernas cansadas
                    </p>
                </div>
            </div>
            <!------------------------>
            <div class="col-sm-12 pad_bottom_galFotos">
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto07.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Gracias al calor generado por las piedras calientes, se crea un efecto sobre el organismo que estimula la circulación, ayuda a eliminar toxinas, y alivia trastornos físicos y emocionales, generando un estado de energía vital.
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa"> Masaje piedras calientes</p>
                </div>
                <!----->
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto08.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Encuentra el equilibrio natural del cuerpo mediante la eliminación de tensión y toxinas. Su efecto tonificante favorece la circulación sanguínea y da firmeza a tus músculos y articulaciones.
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">Masaje Sueco</p>
                </div>
                <!----->
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto09.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Mejora tu postura, tonifica el sistema nervioso y disminuye el estrés, mediante este masaje de estiramiento y presiones que libera la tensión.
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">Masaje Thai</p>
                </div>
            </div>
            <!------------------------>
            <div class="col-sm-12 pad_bottom_galFotos">
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto010.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Estimula la circulación sanguínea y el sistema inmunológico. Regula el funcionamiento de tus órganos eliminando toxinas, y restituye los niveles de energía, logrando un estado de paz mental.
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">Masaje reflexología</p>
                </div>
                <!----->
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto011.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                A través de la opresión en puntos específicos se logra relajar los músculos internos. Disminuye el dolor de cabeza, elimina estrés y la ansiedad, y calma dolores digestivos.
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">Masaje reflexología de pies, manos y cabeza</p>
                </div>
                <!----->
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto016.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Usando como elemento principal el cacao, se aprovechan todas sus propiedades, para eliminar las células muertas y humectar tu piel, mejorando tu bienestar.
                            </div>
                        </div>
                    </div>

                    <p class="tituloHoverIMG_gale_spa">Masaje aroma - fusión</p>
                </div>
            </div>
            <!------------------------>
            <div class="col-sm-12 pad_bottom_galFotos">
                <!----->
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto014.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Rejuvenece tu mirada eliminando los signos de fatiga y envejecimiento en el contorno de los ojos.
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">Facial ojos cansados</p>
                </div>
                <!----->
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto017.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Ayuda a eliminar las marcas de la edad, reafirmando la piel e hidratando profundamente tu rostro y dando una apariencia fresca y juvenil.
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">Facial revitalizante antiedad</p>
                </div>
                <!----->
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img//servicios/spa/foto012.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Usando como elemento principal el cacao, se aprovechan todas sus propiedades, para eliminar las células muertas y humectar tu piel, mejorando tu bienestar.
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">Chocolaterapia</p>
                </div>
            </div>

            <!------------------------>
            <div class="col-sm-12 pad_bottom_galFotos">
                <!----->
                <!----->
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img/servicios/spa/foto018.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Elimina las toxinas, limpia las impurezas de la piel y previene manchas en tu rostro, gracias a los nutrientes que contienen las algas.
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">Facial de algas marinas</p>
                </div>
                <div class="col-sm-4">
                    <div class="fotos">
                        <img src="assets/img/servicios/spa/foto013.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                Utilizando el agua como intermediario, disminuyen las contracturas musculares. Provoca la relajación física y mental, y estimula tu sistema inmunitario y cardiovascular. 
                            </div>
                        </div>
                    </div>
                    <p class="tituloHoverIMG_gale_spa">Hidroterapia</p>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <img src="assets/img//servicios/spa/foto015.jpg" alt="Avatar" class="image" style="width:100%">
                    </div>
                    <p class="tituloHoverIMG_gale_spa">
                        Vapor
                    </p>
                </div>
                <!----->
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------------ -->
@stop
@section('pageJS') 
@stop