@extends('layouts.front.master') 

@section('pageTitle') Elige tu fecha @stop
@section('pageCSS')
    <link rel="stylesheet" type="text/css" href="{{ url('assets/js/front/bxslider-4-4.2.12/dist/jquery.bxslider.min.css') }}">
    <link href="assets/js/lightbox/src/css/lightbox.css" rel="stylesheet">
@stop
@section('content')




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
                <div class="col-md-4 option_select">Elige tu fecha</div>
                <div class="col-md-4 option_select active">Elige tu habitación</div>
                <div class="col-md-4 option_select">Confirma tu pago</div>
            </div>
        </div>

        <br><br>

        @if($data->count() > 0)
            @foreach($data->get() as $item)
                <div class="content_rooms">
                    <div class="room">
                        {{--<div class="col-md-12">--}}
                        {{--</div>--}}
                        <div class="col-md-6">
                            {!! $item->get_slider() !!}
                        </div>
                        <div class="col-md-6">
                            <div class="content_description">
                                <p class="title_room"> {!! $item->name !!} </p>

                                {{--                                <p class="type_room">{{ $item->type_room() }}</p>--}}
                                <p class="label_include">Tipo:</p>
                                <p class="description">{{ $item->type_room() }}</p>

                                <p class="label_include">Incluye:</p>
                                <p class="description">{!! $item->get_characteristics_html() !!}</p>

                                @if($item->has_deal())
                                    {!! $item->get_deal_html() !!}
                                @endif

                                <hr>

                                {{-- Costo de habitacion --}}
                                @if( $numero_personas == 1 )
                                    <p class="costo_per_people">Costo por persona (por noche):</p>
                                    <p class="price">${{ number_format($item->price_sencilla, 2, ".", ",") }}</p>
                                @else
                                    <p class="costo_per_people">Costo por persona (por noche):</p>
                                    <p class="price">${{ number_format($item->price_doble, 2, ".", ",") }}</p>
                                @endif


                                <form action="{{ url("reservacion-ikaan-confirma-tu-pago") }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="room_id"         value="{{ $item->id }}" >
                                    <input type="hidden" name="fecha_entrada"   value="{{ $fecha_entrada }}" >
                                    <input type="hidden" name="fecha_salida"    value="{{ $fecha_salida }}" >
                                    <input type="hidden" name="numero_personas" value="{{ $numero_personas }}" >
                                    <button type="submit">Elegir habitación</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="not_exists_data">No se encuentran reservaciones disponibles con el criterio de busqueda ingresado, modifica tu fecha de entrada, salida y/o número de personas.</p>
            <div class="w100 text-center">
                <a onclick="window.history.back();" class="back_button">Volver a buscar</a>
            </div>
            <br><br>
            <br><br>
        @endif





    </div>

</div>
@stop

@section('pageJS') 
    <script src="{{ url('assets/js/front/bxslider-4-4.2.12/dist/jquery.bxslider.min.js') }}"></script>
    <script src="{{ url('assets/js/front/home.js') }}"></script>
@show