@extends('layouts.front.master') 
{{-- Page Title --}}

@section('pageTitle') Paquete Villa Spa @stop
@section('pageCSS')
@stop
@section("content") 
    <!-- ------------------------------------------------------------------ -->
	<div class="container-fluid pd0">
		<div class="col-sm-12 pd0">
			<div class="col-sm-9 pd0">
				<div class="banner-villas-spa"></div>
			</div>
			<div class="col-sm-3 pd0">
            	<div class="fondoSecBanner">
	                <p class="tituloJardin_bot">
	                    Villa  y Spa
	                </p>
	                <p class="parrafoBlando_boda">
	                    Ideal para una escapada<br> de fin de semana<br> con tu pareja o amigos
	                </p>
            	</div>
            </div>
		</div>
	</div>
    <!---->
	<div class="section03_paqueteExpress">
		<div class="container">
			<div class="col-sm-10 col-sm-offset-1">
				<p class="parrafoSuites">
					Nuestro Paquete Villa & Spa incluye una noche de hospedaje en Hotel Ikaan Villa Spa, masaje sueco, baño de vapor, alimentos, bebidas y snacks.
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
								Villas <br>(1 noche)
							</p>
						</div>
						<div class="col-sm-1 pd0">
							<hr>
						</div>
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Sencilla<br>$ 3,100 MXN<br>
							</p>
						</div>
						<div class="col-sm-1">
							<hr>
						</div>
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Doble<br>$ 2,600 MXN<br>
							</p>
						</div>
					</div>
				</div>
				<!----->
				<div class="col-sm-8 topTopPrecios">
					<div class="cuadroDe_preciosVilla">
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Villas suite <br>(1 noche)
							</p>
						</div>
						<div class="col-sm-1 pd0">
							<hr>
						</div>
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Sencilla<br>$ 3,600 MXN<br>
							</p>
						</div>
						<div class="col-sm-1">
							<hr>
						</div>
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Doble<br>$ 3,200 MXN<br>
							</p>
						</div>
					</div>
				</div>
				<!----->
				<div class="col-sm-8 topTopPrecios">
					<div class="cuadroDe_preciosVilla">
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Villas deluxe  <br>(1 noche)
							</p>
						</div>
						<div class="col-sm-1 pd0">
							<hr>
						</div>
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Sencilla<br> $ 3,600 MXN<br>
							</p>
						</div>
						<div class="col-sm-1">
							<hr>
						</div>
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Doble<br>$ 3,200 MXN<br>
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