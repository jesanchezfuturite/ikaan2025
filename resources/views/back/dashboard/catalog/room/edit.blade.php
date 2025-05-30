@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Edición de habitación
@stop

{{-- Content Title --}}
@section('contentTitle')
    Edición de habitación
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{ url('cms/dashboard/catalogo/habitaciones') }}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-block">

                    {{ Form::open(['url' => url('cms/dashboard/catalogo/habitaciones/update/'.$id) ]) }}



                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Información General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">Calendario de disponibilidad</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane container active" id="home">

                            <!------------------------------ INFORMACION GENERAL ------------------------------>
                            <br>

                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Nombre de la habitación</label>
                                <div class="col-sm-12">
                                    {{ Form::text('name', $data->name, ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Fotografía principal</label>
                                <div class="col-sm-3 text-center">
                                    <img src="{{ url($data->principal_photo) }}" style="width: 100%;" />
                                    <br>
                                    <br>
                                </div>
                                <div class="col-sm-12">
                                    {{ Form::file('principal_photo', null, ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="form-group row" style="background: #f1f1f1; padding: 15px; border-radius: 10px;">
                                <label class="col-sm-12 col-form-label">Galería de habitación</label>
                                <div class="row width-100">
                                    @foreach($data->get_gallery() as $item)
                                        <div class="col-sm-3 text-right">
                                            <img src="{{ url($item->path) }}" style="width: 100%;" />
                                            <button class="btn btn-danger" type="button" href="{{ url('cms/dashboard/catalogo/habitaciones/remove_image/')."/".$item->id }}" onclick="remove_picture($(this));" style="margin-top: -61px;">Eliminar</button>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-sm-12 text-right">
                                    <button class="btn btn-primary add_photo_row" ><i class="icofont icofont-social-photobucket"></i>Agregar fotografía</button>
                                    <br>
                                    <br>
                                </div>
                                <div class="col-sm-12 disp-ib" id="fotografias_group">

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="imagen_galeria[]" />
                                        <div class="input-group-append">
                                            <button class="btn btn-danger" type="button" onclick="$(this).parent().parent().remove();">Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Capacidad de personas</label>
                                <div class="col-sm-12">
                                    {{ Form::select('maximum_people', [1 => "1", 2 => 2, 3 => 3, 4 => 4] , $data->maximum_people, ['class' => 'form-control']) }}
                                </div>
                            </div>

                            {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-12 col-form-label">Tipo</label>--}}
                            {{--<div class="col-sm-12">--}}
                            {{--{{ Form::select('type', array('sencilla' => "Sencilla", 'doble' => "Doble"), null, ['class' => 'form-control']) }}--}}
                            {{--</div>--}}
                            {{--</div>--}}


                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Costo por persona en habitación de tipo sencilla (1 persona)</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="number" name="price_sencilla" step="any" class="form-control" value="{{ $data->price_sencilla }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Costo por persona en habitación de tipo doble (2 o más personas)</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="number" name="price_doble" step="any" class="form-control" value="{{ $data->price_doble }}">
                                    </div>
                                </div>
                            </div>

                            {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-12 col-form-label">IVA</label>--}}
                            {{--<div class="col-sm-12">--}}
                            {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon">%</span>--}}
                            {{--<input type="number" name="iva_percent" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-12 col-form-label">¿Incluye cancelación gratuita?</label>--}}
                            {{--<div class="col-sm-12">--}}
                            {{--{{ Form::select('free_cancel', array("1" => "SI", "0" => "NO") ,null, ['class' => 'form-control']) }}--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="row">--}}
                            {{--<div id="cancelacion_gratuita" class="col-sm-11 offset-sm-1" >--}}
                            {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-12 col-form-label">Información de cancelación</label>--}}
                            {{--<div class="col-sm-12">--}}
                            {{--{{ Form::textarea('cancel_comments', null, ['class' => 'form-control']) }}--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-12 col-form-label">Limite de cancelación gratuita<br>(antes de fecha de check-in)</label>--}}
                            {{--<div class="col-sm-12">--}}
                            {{--{{ Form::number('days_before_cancel', null, ['class' => 'form-control']) }}--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}


                            <div class="form-group row" style="background: #f1f1f1; padding: 15px; border-radius: 10px;">
                                <label class="col-sm-6 col-form-label">Características de la habitación</label>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary add_caracteristica_row" ><i class="icofont icofont-social-photobucket"></i>Agregar característica</button>
                                    <br>
                                    <br>
                                </div>
                                <div class="col-sm-12 disp-ib" id="caracteristicas_group">

                                    @foreach($data->get_characteristics() as $item)
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="caracteristica_edit[{{ $item->id }}]" value="{{ $item->name }}" />
                                            <div class="input-group-append">
                                                <button class="btn btn-danger" type="button" href="{{ url('cms/dashboard/catalogo/habitaciones/remove_caracteristica/')."/".$item->id }}" onclick="remove_caracteristica($(this));">Eliminar</button>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Ofertas a incluir</label>
                                <div class="col-sm-12">
                                    {{ Form::select('deal', $deal ,$data->deal_id, ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <!------------------------------ INFORMACION GENERAL ------------------------------>

                        </div>
                        <div class="tab-pane container fade" id="menu1">

                            <br>
                            <!------------------------------ CALENDARIO ------------------------------>

                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Selecciona los días en los que la habitación no estará disponible.</label>
                                <div class="col-sm-12">
                                    <div style="width: 20px; height: 20px; background: #ce3131; display: inline-block;"></div>
                                    <label style="line-height: 20px; vertical-align: top; margin: 0;">Días no disponibles</label>
                                </div>
                            </div>
                            <div id="fecha_disponibilidad_edit" style="display: none;">{{ $data->get_calendars() }}</div>
                            <div class="form-group text-center">
                                <div id="fecha_disponibilidad" style="margin: 0 auto; display: inline-block;"></div>
                            </div>

                            <!------------------------------ CALENDARIO ------------------------------>

                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-2"></div>

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary btn-save"><i class="icofont icofont-save"></i> Guardar</button>
                            <button type="reset" class="btn btn-danger"><i class="icofont icofont-refresh"></i> Limpiar</button>
                        </div>
                    </div>

                    {{ Form::close() }}

                </div>

            </div>
        </div>
    </div>
@stop

{{-- Page JS --}}
@section('pageJS')
    {{ Html::script('/back/js/dashboard/simpleForm.js')  }}
    {{ Html::script('/back/js/multi_dates_picker/jquery-ui.multidatespicker.js')  }}
    {{ Html::script('/back/js/dashboard/catalog/room/edit.js')  }}
@stop
