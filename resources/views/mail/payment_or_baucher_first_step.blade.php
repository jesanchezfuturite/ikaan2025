<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <link href="{{ url('assets/css/general_mail.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ url('assets/css/spei.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ url('assets/css/oxxo.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ url('assets/css/main.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body>

        <header class="container-fluid header_mail">
            <img src="{{ url('assets/img/logo-ikaan-White.png') }}" />
        </header>


        <div class="container">
            <div class="content_rooms">
                <div class="room">
                    {{--<div class="col-md-12">--}}
                    {{--</div>--}}
                    <div class="col-md-12">
                    </div>
                    <div class="col-md-12">
                        <div class="content_description">
                            <p class="title_room">Tu reservación en IKAAN</p>

                            <p class="label_include">SKU:</p>
                            <p class="description">{{ $reservation->SKU }}</p>


                            <div class="col-md-6">
                                <p class="label_include">Reservación:</p>
                                <p class="description">{{ $room->name }}</p>
                            </div>

                            <div class="col-md-6">
                                <p class="label_include">Tipo:</p>
                                <p class="description">{{ $room->type_room() }}</p>
                            </div>

                            <div class="col-md-6">
                                <p class="label_include">Total de personas:</p>
                                <p class="description">
                                    {!! $reservation->numero_personas !!}
                                    @if($reservation->numero_personas > 1)
                                        personas
                                    @else
                                        persona
                                    @endif
                                </p>
                            </div>


                            <div class="col-md-6">
                                <p class="label_include">Total de noches:</p>
                                <p class="description">
                                    {!! $reservation->total_noches !!}
                                </p>
                            </div>



                            <div class="w100 disp-ib">
                                <div class="col-md-6">
                                    <p class="label_include">Llegada:</p>
                                    <p class="description">{{ $reservation->fecha_entrada }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="label_include">Salida:</p>
                                    <p class="description">{{ $reservation->fecha_salida }}</p>
                                </div>
                            </div>


                            @if($room->type == "paquete")
                                <div class="w100 disp-ib">
                                    <div class="col-md-6">
                                        <p class="label_include">Check-in:</p>
                                        <p class="description">{{ date("H:i", strtotime($room->checkin)) }} Hrs.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="label_include">Check-out:</p>
                                        <p class="description">{{ date("H:i", strtotime($room->checkout)) }} Hrs.</p>
                                    </div>
                                </div>
                            @endif

                            <p class="label_include">Incluye:</p>
                            <p class="description">{!! $room->get_characteristics_html() !!}</p>


                            @if($room->has_deal())
                                @if($room->get_deal["type"] == "reservacion")
                                    {{--<p class="description">{{ $room->get_deal["name"] }}</p>--}}
                                @else
                                    <p class="label_include">Extras incluidos:</p>
                                    <p class="description">{{ $room->get_deal["name"] }}, {{ $room->get_deal["amenidades_include"] }}</p>
                                @endif
                            @endif


                            <p class="label_include">Status:</p>
                            @if($reservation->payment_status == "paid")
                                <p class="description">Pagado</p> 
                                    <div class="datos_transferencia_bancaria text-center">
                                        <div class="ps">
                                            <div class="ps-header">
                                                <div class="ps-info">
                                                    <div class="ps-brand"></div>
                                                    <div class="ps-amount">
                                                        <h3>Monto pagado</h3>
                                                        <h2>$ {{ number_format($reservation->total, 2, ".", ",") }} <sup>MXN</sup></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ps-instructions">
                                                <h3>Instrucciones</h3>
                                                <ol>
                                                    <li>Ingresa a esta liga para finalizar tu reservación <a href="{{URL::to('admision/'.$reservation->client_id)}}" style="color: #000; font-weight: 700; text-decoration: none;">Formato de Admisión</a> </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                            @else
                                <p class="description">Pendiente de pago</p>

                                <br>
                                <p class="description">*En seguida te mostramos los datos para que realices el pago correspondiente de tu reservación.</p>
                                @if($reservation->tipo_pago == "transferencia_bancaria")

                                    <div class="datos_transferencia_bancaria text-center">
                                        <div class="ps">
                                            <div class="ps-header">
                                                <div class="ps-info">
                                                    <div class="ps-brand"><img src="{{ url('assets/img/spei_brand.png') }}" alt="Banorte"></div>
                                                    <div class="ps-amount">
                                                        <h3>Monto a pagar</h3>
                                                        <h2>$ {{ number_format($reservation->total, 2, ".", ",") }} <sup>MXN</sup></h2>
                                                        <p>Utiliza exactamente esta cantidad al realizar el pago.</p>
                                                    </div>
                                                </div>
                                                <div class="ps-reference">
                                                    <h3>CLABE interbancaria</h3>
                                                    <h1>{{ $reservation->spei_code }}</h1>
                                                </div>
                                            </div>
                                            <div class="ps-instructions">
                                                <h3>Instrucciones</h3>
                                                <ol>
                                                    <li>Accede a tu banca en línea.</li>
                                                    <li>Da de alta la CLABE en esta ficha. <strong>El banco deberá de ser STP <span style="font-size: 10px;">(Sistema de Transferencia y Pagos)</span></strong>.</li>
                                                    <li>Realiza la transferencia correspondiente por la cantidad exacta en esta ficha, <strong>de lo contrario se rechazará el cargo</strong>.</li>
                                                    <li>Al confirmar tu pago, el portal de tu banco generará un comprobante digital. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>
                                                    <li>Ingresa a esta liga para finalizar  el proceso de reservación<a href="{{URL::to('admision/'.$reservation->client_id)}}" style="color: #000; font-weight: 700; text-decoration: none;">Formato de Admisión</a> </li>
                                                </ol>
                                                <div class="ps-footnote">Al completar estos pasos recibirás un correo de confirmación de pago.</div>
                                            </div>
                                        </div>
                                    </div>

                                @elseif($reservation->tipo_pago == "oxxo_pay")
                                    <div class="ps">
                                        <div class="ps-header">
                                            <div class="ps-info">
                                                <div class="ps-brand"><img src="{{ url('assets/img/oxxopay_brand.png') }}" alt="Banorte"></div>
                                                <div class="ps-amount">
                                                    <h3>Monto a pagar</h3>
                                                    <h2>$ {{ number_format($reservation->total, 2, ".", ",") }} <sup>MXN</sup></h2>
                                                    <p>OXXO cobrará una comisión adicional al momento de realizar el pago.</p>
                                                </div>
                                            </div>
                                            <div class="ps-reference">
                                                <h3>Referencia</h3>
                                                <h1>{{ $reservation->spei_code }}</h1>
                                            </div>
                                        </div>
                                        <div class="ps-instructions">
                                            <h3>Instrucciones</h3>
                                            <ol>
                                                <li>Acude a la tienda OXXO más cercana. <a href="https://www.google.com.mx/maps/search/oxxo/" target="_blank">Encuéntrala aquí</a>.</li>
                                                <li>Indica en caja que quieres realizar un pago de <strong>OXXOPay</strong>.</li>
                                                <li>Dicta al cajero el número de referencia en esta ficha para que tecleé directamete en la pantalla de venta.</li>
                                                <li>Realiza el pago correspondiente con dinero en efectivo.</li>
                                                <li>Al confirmar tu pago, el cajero te entregará un comprobante impreso. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>
                                                <li>Ingresa a esta liga para finalizar el proceso de reservación<a href="{{URL::to('admision/'.$reservation->client_id)}}" style="color: #000; font-weight: 700; text-decoration: none;">Formato de Admisión</a> </li>
                                            </ol>
                                            <div class="ps-footnote">Al completar estos pasos recibirás un correo de <strong>Ikaan</strong> confirmando tu pago.</div><br>
                                        </div>
                                    </div>

                                @endif

                            @endif


                            @if( $reservation->tipo_pago == "debito_credito" )                      {{-- debito_credito --}}

                            @elseif( $reservation->tipo_pago == "transferencia_bancaria" )          {{-- transferencia_bancaria --}}

                            @else                                                                   {{-- oxxo_pay --}}

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
<style>
    body, html{
        padding: 0;
        margin: 0;
    }

    header{
        background: #89acaf;
        text-align: center;
    }

    header img{
        height: 80px
    }

</style>