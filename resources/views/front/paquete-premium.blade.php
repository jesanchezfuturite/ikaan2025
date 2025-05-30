@extends('layouts.front.master') 
{{-- Page Title --}}

@section('pageTitle') Paquete Premium @stop
@section('pageCSS')
@stop
@section("content") 
    <!-- ------------------------------------------------------------------ -->    <!-- Page content section -->             
    <div class="container-fluid pd0">
		<div class="col-sm-12 pd0">
			<div class="col-sm-9 pd0">
				<div class="banner-premium"></div>
			</div>
			<div class="col-sm-3 pd0">
            	<div class="fondoSecBanner">
	                <p class="tituloJardin_bot_dos">
	                    Premium
	                </p>
	                <p class="parrafoBlando_boda">
	                    Interactúa con la naturaleza con nuestro paquete premium
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
					Incluye tres noches de hospedaje en Hotel Ikaan Villa Spa, masaje sueco, baño de vapor, reflexología, masaje a su elección, alimentos, bebidas y snacks.
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
								Villas <br>(3 noches)
							</p>
						</div>
						<div class="col-sm-1 pd0">
							<hr>
						</div>
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Sencilla<br>$ 8,100 MXN<br>
							</p>
						</div>
						<div class="col-sm-1">
							<hr>
						</div>
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Doble<br>$ 6,600 MXN<br>
							</p>
						</div>
					</div>
				</div>
				<!----->
				<div class="col-sm-8 topTopPrecios">
					<div class="cuadroDe_preciosVilla">
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Villas suite <br>(3 noches)
							</p>
						</div>
						<div class="col-sm-1 pd0">
							<hr>
						</div>
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Sencilla<br>$ 10,000 MXN<br>
							</p>
						</div>
						<div class="col-sm-1">
							<hr>
						</div>
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Doble<br>$ 8,500 MXNN<br>
							</p>
						</div>
					</div>
				</div>
				<!----->
				<div class="col-sm-8 topTopPrecios">
					<div class="cuadroDe_preciosVilla">
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Villas deluxe  <br>3 noches)
							</p>
						</div>
						<div class="col-sm-1 pd0">
							<hr>
						</div>
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Sencilla<br>$ 10,000 MXN<br>
							</p>
						</div>
						<div class="col-sm-1">
							<hr>
						</div>
						<div class="col-sm-3">
							<p class="texto_de_los_precios">
								Doble<br>$ 8,500 MXN<br>
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