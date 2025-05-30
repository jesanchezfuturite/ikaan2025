@extends('layouts.front.master') 

@section('pageTitle') Elige tu fecha @stop
@section('pageCSS')
<link rel="stylesheet" type="text/css" href="{{ url('assets/js/front/bxslider-4-4.2.12/dist/jquery.bxslider.min.css') }}">
@show
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
                    <div class="col-md-4 option_select">Elige tu habitación</div>
                    <div class="col-md-4 option_select active">Confirma tu pago</div>
                </div>
            </div>

            <br>
            <br>

            <div class="content_rooms">
                <div class="room">
                    {{--<div class="col-md-12">--}}
                    {{--</div>--}}
                    <div class="col-md-4">
                        {!! $data->get_slider() !!}
                    </div>
                    <div class="col-md-8">
                        <div class="content_description">
                            <p class="title_room"> {!! $data->name !!} </p>


                            <p class="label_include">Tipo:</p>
                            <p class="description">{{ $data->type_room() }}</p>


                            <p class="label_include">Incluye:</p>
                            <p class="description">{!! $data->get_characteristics_html() !!}</p>


                            @if($data->has_deal())
                                <p class="label_include">Extras incluidos:</p>
                                @if($data->get_deal["type"] == "reservacion")
                                    <p class="description">{{ $data->get_deal["name"] }}</p>
                                @else
                                    <p class="description">{{ $data->get_deal["name"] }}, {{ $data->get_deal["amenidades_include"] }}</p>
                                @endif
                            @endif

                            <br>

                            <p class="label_include">Total de personas:</p>
                            <p class="description">
                                {!! $numero_personas !!}
                                @if($numero_personas > 1)
                                    personas
                                @else
                                    persona
                                @endif
                            </p>


                            <div class="w100 disp-ib">
                                <div class="col-md-3">
                                    <p class="label_include">Llegada:</p>
                                    <p class="description">{{ $fecha_entrada }}</p>
                                </div>
                                <div class="col-md-3">
                                    <p class="label_include">Salida:</p>
                                    <p class="description">{{ $fecha_salida }}</p>
                                </div>
                            </div>

                            <p class="label_include">Total de noches:</p>
                            <p class="description">
                                {!! $total_noches !!}
                            </p>


                            @if($data->type == "paquete")
                                <div class="w100 disp-ib">
                                    <div class="col-md-3">
                                        <p class="label_include">Check-in:</p>
                                        <p class="description">{{ date("H:i", strtotime($data->checkin)) }} Hrs.</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="label_include">Check-out:</p>
                                        <p class="description">{{ date("H:i", strtotime($data->checkout)) }} Hrs.</p>
                                    </div>
                                </div>
                            @endif

                            <br>
                            <hr>

                            <div class="disp-ib">
                                <div class="col-md-6 text-left">
                                    <p class="costo_per_people">Costo por persona (por noche):</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p class="price_little m-0">${{ number_format($costo_por_persona, 2, ".", ",") }}</p>
                                </div>

                                <div class="col-md-6 text-left">
                                    <p class="costo_per_people">Subtotal:</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p class="price_little m-0">${{ number_format($subtotal, 2, ".", ",") }}</p>
                                </div>

                                <div class="col-md-6 text-left">
                                    <p class="costo_per_people">IVA:</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p class="price_little m-0">${{ number_format($iva, 2, ".", ",") }}</p>
                                </div>

                                @if($data->has_deal())
                                    @if($data->get_deal["type"] == "reservacion")
                                        <div class="col-md-6 text-left">
                                            <p class="costo_per_people">{{ $data->get_deal["name"] }}</p>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p class="price_little m-0">-${{ number_format($descount_promotion, 2, ".", ",") }}</p>
                                        </div>
                                    @endif
                                @endif


                                <div class="col-md-6 text-left">
                                    <p class="costo_per_people">Total de hospedaje:</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p class="price m-0">${{ number_format($total, 2, ".", ",") }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>





            <br>


            <div class=""></div>


            <form class="general_information"  id="debito_credito_form">

                {{-- Informacion para datos generales --}}
                {{--<input type="hidden" name="room_id" value="{{ $data->id }}" />--}}
                {{--<input type="hidden" name="fecha_entrada" value="{{ $fecha_entrada }}" />--}}
                {{--<input type="hidden" name="fecha_salida" value="{{ $fecha_salida }}" />--}}
                {{--<input type="hidden" name="numero_personas" value="{{ $numero_personas }}" />--}}

                <input type="hidden" name="tipo_pago" value="" />

                {{ csrf_field() }}

                <div class="disp-ib">
                    <div class="col-md-12">
                        <div class="title_line">
                            <p>Datos de generales de reservación</p>
                        </div>
                        <div class="col-md-6 p15">
                            <input type="text" value="" placeholder="*Nombre completo" name="nombre_completo" />
                        </div>
                        <div class="col-md-6 p15">
                            <input type="email" value="" placeholder="*Email" name="email" />
                        </div>
                        <div class="col-md-6 p15">
                            <input type="phone" value="" placeholder="*Teléfono" name="telefono" />
                        </div>
                        <div class="col-md-6 p15">
                            <input type="phone" value="" placeholder="Celular" name="celular" />
                            <br>
                            <br>
                        </div>
                    </div>
                </div>



                <div class="forma_pago">
                    <div class="title_line">
                        <p>Forma de Pago</p>
                    </div>
                    <div class="col-md-4 forma_pago_button" type="debito_credito" >
                        <div>
                            <img src="{{ url('assets/img/debito_credito.png') }}" />
                        </div>
                    </div>
                    <div class="col-md-4 forma_pago_button" type="transferencia_bancaria" >
                        <div>
                            <img src="{{ url('assets/img/transferencia_bancaria.png') }}" />
                        </div>
                    </div>
                    <div class="col-md-4 forma_pago_button" type="oxxo_pay" >
                        <div>
                            <img src="{{ url('assets/img/oxxo_pay.png') }}" />
                        </div>
                    </div>
                </div>



                <div class="disp-ib">

                    <br>

                    {{-- Informacion de datos de pago para debito_credito --}}
                    <div class="dinamic_form" form_type="debito_credito">
                        <div class="col-md-12">
                            <div class="title_line">
                                <p>Datos de Pago</p>
                            </div>
                            <div class="col-md-6 p15">
                                <input type="text" value="" placeholder="*Nombre del tarjetahabiente" name="nombre_del_tarjetahabiente" />
                            </div>
                            <div class="col-md-6 p15">
                                <input type="text" value="" placeholder="*Número de tarjeta de crédito" name="numero_de_tarjeta_de_credito" />
                            </div>
                            <div class="col-md-2 p15">
                                <input type="number" value="" placeholder="*Mes de expiración" name="exp_mes" />
                            </div>
                            <div class="col-md-2 p15">
                                <input type="number" value="" placeholder="*Año de expiración" name="exp_anio" />
                            </div>
                            <div class="col-md-2 p15">
                                <input type="number" value="" placeholder="*CVC" name="cvc" />
                            </div>
                        </div>
                    </div>

                    <div class="dinamic_form" form_type="transferencia_bancaria">
                        *Te enviaremos por medio del correo electrónico ingresado la ficha SPEI con los datos correspondientes para que puedas realizar el pago de tu reservación.
                    </div>

                    <div class="dinamic_form" form_type="oxxo_pay">
                        *Te enviaremos por medio del correo electrónico ingresado la ficha de referencia junto con los pasos necesarios para que puedas realizar el pago de tu reservación.
                    </div>

                </div>

                <br><br>
                <br><br>

                <button class="confirmar_pago">Confirmar pago</button>

            </form>




        </div>

        <br><br>

    </div>
@stop

@section('pageJS') 
    <script src="{{ url('assets/js/front/bxslider-4-4.2.12/dist/jquery.bxslider.min.js') }}"></script>
    <script src="{{ url('assets/js/front/home.js') }}"></script>
@show