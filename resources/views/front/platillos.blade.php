@extends('front.template.template')

@section('title', 'Elige tu fecha')
@section('pageCSS')
    <link rel="stylesheet" type="text/css" href="{{ url('assets/js/front/bxslider-4-4.2.12/dist/jquery.bxslider.min.css') }}">
@stop
@section('content')




<div class="slider_top">
    <div class="slide_ch" style="background: url( {{ url('assets/img/banners/banner_1.jpg')  }} );"></div>
    <div class="slide_ch" style="background: url( {{ url('assets/img/banners/banner_2.jpg')  }} );"></div>
    <div class="slide_ch" style="background: url( {{ url('assets/img/banners/banner_3.jpg')  }} );"></div>
    <div class="slide_ch" style="background: url( {{ url('assets/img/banners/banner_4.jpg')  }} );"></div>
</div>


<div class="container">
    <div class="content_reservation">
        <br>
        <p class="big_title text-center">Escápate.</p>
        <p class="subtitle text-center">Reserva con nosotros, desconéctate de todo y deja que tus sentidos despierten.</p>

        <div class="line_separator">
            <div class="line"></div>
            <img src="{{ url('assets/img/logo_separator.jpg') }}">
        </div>

        <p class="big_title text-center">¡Tu reservación está lista!</p>

        <p class="normal_text">Código de reservación: <font class="blue-color">{{ $sku }}</font></p>
        <br>
        <p class="normal_text">Los detalles de tu reservación se enviaron a tu correo así como la ficha de pago en caso de seleccionar "Transferencia bancaria" u "OXXO" como medio de pago.</p>
        <p class="little_text_pl">* Si tu medio de pago es "Transferencia bancaria" u "OXXO", tu reservación no esta garantizada hasta que realices el pago correspondiente.</p>
        <br>
        <p class="normal_text">Si tienes alguna pregunta no dudes en contactarnos en:</p>
        <br>
        <div class="email">
            <a class="normal_text_bold">reservaciones@ikaan.com.mx</a>
        </div>
        <br>
        <div class="telefonos">
            <a href="tel: 8183447761">Tel. 81 83447761</a>  &nbsp;-&nbsp;  <a href="tel: 8181764075">Cel. 81 8176 4075</a>
        </div>

    </div>

    <br><br>

    <form class="table_alimentos" action="{{ url('save_alimentos') }}" id="table_alimentos">

        <input type="hidden" value="{{ $sku }}" name="sku">

        <p class="title_alimentos">Elige los alimentos de tu estancia.</p>

        @for($i = 1; $i <= $reservation->total_noches; $i++)
            <div class="day">
                <div class="header_day" day_selected="{{ $i }}">
                    <p class="label_day">Día {{ $i }}</p>
                </div>

                <div class="menu" day_selected="{{ $i }}">
                    <div class="col-md-4 section_food">
                        <p class="header_parent_menu">Desayuno <font class="hour">8:30 AM - 10:30 AM</font></p>

                            @foreach($bedidas_desayuno as $key_categoria => $item_categoria)
                                <div class="section_comida">
                                    <p class="title_type_food">{{ $key_categoria }}</p>
                                    @foreach($item_categoria as $key_comida => $item_comida)
                                        <div class="comida_nombre">
                                            <input name="menu[{{ $i }}][desayuno][bebida]" value="{{ $item_comida->id }}" type="radio" name="">
                                            <p class="name">{{ ucfirst(strtolower($item_comida->food)) }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach


                            @foreach($comidas_desayuno as $key_categoria => $item_categoria)
                                <div class="section_comida">
                                    <p class="title_type_food">{{ $key_categoria }}</p>
                                    @foreach($item_categoria as $key_comida => $item_comida)
                                        <div class="comida_nombre">
                                            <input name="menu[{{ $i }}][desayuno][comida]" value="{{ $item_comida->id }}" type="radio" name="">
                                            <p class="name">{{ ucfirst(strtolower($item_comida->food)) }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach

                    </div>
                    <div class="col-md-4 section_food">
                        <p class="header_parent_menu">Comida <font class="hour">1:00 PM - 3:00 PM</font></p>

                        @foreach($bedidas_comida as $key_categoria => $item_categoria)
                            <div class="section_comida">
                                <p class="title_type_food">{{ $key_categoria }}</p>
                                @foreach($item_categoria as $key_comida => $item_comida)
                                    <div class="comida_nombre">
                                        <input name="menu[{{ $i }}][comida][bebida]" value="{{ $item_comida->id }}" type="radio" name="">
                                        <p class="name">{{ ucfirst(strtolower($item_comida->food)) }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach


                        @foreach($comidas_comida as $key_categoria => $item_categoria)
                            <div class="section_comida">
                                <p class="title_type_food">{{ $key_categoria }}</p>
                                @foreach($item_categoria as $key_comida => $item_comida)
                                    <div class="comida_nombre">
                                        <input name="menu[{{ $i }}][comida][comida]" value="{{ $item_comida->id }}" type="radio" name="">
                                        <p class="name">{{ ucfirst(strtolower($item_comida->food)) }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach

                    </div>
                    <div class="col-md-4 section_food">
                        <p class="header_parent_menu">Cena <font class="hour">6:30 PM - 8:30 PM</font></p>

                        @foreach($bedidas_cena as $key_categoria => $item_categoria)
                            <div class="section_comida">
                                <p class="title_type_food">{{ $key_categoria }}</p>
                                @foreach($item_categoria as $key_comida => $item_comida)
                                    <div class="comida_nombre">
                                        <input name="menu[{{ $i }}][cena][bebida]" value="{{ $item_comida->id }}" type="radio" name="">
                                        <p class="name">{{ ucfirst(strtolower($item_comida->food)) }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach


                        @foreach($comidas_cena as $key_categoria => $item_categoria)
                            <div class="section_comida">
                                <p class="title_type_food">{{ $key_categoria }}</p>
                                @foreach($item_categoria as $key_comida => $item_comida)
                                    <div class="comida_nombre">
                                        <input name="menu[{{ $i }}][cena][comida]" value="{{ $item_comida->id }}" type="radio" name="">
                                        <p class="name">{{ ucfirst(strtolower($item_comida->food)) }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        @endfor

        <br>
        <br>

        <textarea class="especificaciones_alimentos" name="especificaciones" placeholder="Especifica más sobre los alimentos de tu estancia"></textarea>

        <br>
        <br>

        <div class="text-center">
            <a class="button_guardar_lista" href="{{ url("/") }}">Decidir más tarde</a>
            <button class="button_guardar_lista" type="submit">Guardar lista de alimentos</button>
        </div>

    </form>

</div>


<br>
<br>
@stop
@section('pageJS') 
    <script src="{{ url('assets/js/front/bxslider-4-4.2.12/dist/jquery.bxslider.min.js') }}"></script>
    <script src="{{ url('assets/js/front/home.js') }}"></script>
@show