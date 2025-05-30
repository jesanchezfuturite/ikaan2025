@extends('layouts.front.master') 

@section('pageTitle') Elige tu fecha @stop

@section('pageCSS')
<link rel="stylesheet" type="text/css" href="{{ url('assets/js/front/bxslider-4-4.2.12/dist/jquery.bxslider.min.css') }}">
@show
@section("content")

    <div class="slider_top">
        <div class="slide_ch" style="background: url('assets/img/banners/banner_1.jpg');"></div>
        <div class="slide_ch" style="background: url('assets/img/banners/banner_2.jpg');"></div>
        <div class="slide_ch" style="background: url('assets/img/banners/banner_3.jpg');"></div>
        <div class="slide_ch" style="background: url('assets/img/banners/banner_4.jpg');"></div>
    </div>


    <div class="container">
        <div class="content_reservation">
            <br>
            <p class="big_title text-center">Escápate.</p>
            <p class="subtitle text-center">Reserva con nosotros, desconéctate de todo y deja que tus sentidos despierten.</p>

            <div class="line_separator">
                <div class="line"></div>
                <img src="assets/img/logo_separator.jpg">
            </div>

            <div class="header_selector_options">
                <div class="options">
                    <div class="images">
                        <img src="assets/img/button_options.png" />
                        <img src="assets/img/button_options.png" />
                    </div>
                    <div class="col-md-4 option_select active">Elige tu fecha</div>
                    <div class="col-md-4 option_select">Elige tu habitación</div>
                    <div class="col-md-4 option_select">Confirma tu pago</div>
                </div>
            </div>

            <div class="content_dates">
                <form action="{{ url('reservacion-ikaan-selecciona-habitacion') }}" method="GET" id="choose_date">
                    <div class="col-md-4 input_date_selected">
                        <input type="text" value="" name="fecha_entrada" placeholder="Fecha de entrada" title="Ingresa Fecha de entrada." autocomplete="off">
                    </div>
                    <div class="col-md-4 input_date_selected">
                        <input type="text" value="" name="fecha_salida" placeholder="Fecha de salida" title="Ingresa Fecha de salida." autocomplete="off">
                    </div>
                    <div class="col-md-4 input_date_selected">
                        <input type="number" value="" name="numero_personas" placeholder="Número de personas" title="Ingresa Número de personas." />
                    </div>

                    <div class="col-md-4 col-md-offset-8 input_date_selected pt-0">
                        <button type="submit" class="disponibilidad_button">Buscar<br>disponibilidad</button>
                    </div>
                </form>
            </div>

        </div>

        <br><br>

    </div>
@stop

@section('pageJS') 
    <script src="{{ url('assets/js/front/bxslider-4-4.2.12/dist/jquery.bxslider.min.js') }}"></script>
    <script src="{{ url('assets/js/front/home.js') }}"></script>
@show