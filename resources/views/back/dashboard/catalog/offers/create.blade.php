@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Alta de nueva oferta
@stop

{{-- Content Title --}}
@section('contentTitle')
    Alta de nueva oferta
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{ url('cms/dashboard/catalogo/ofertas') }}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-block">

                    {{ Form::open(['url' => url('cms/dashboard/catalogo/ofertas/store') ]) }}


                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Nombre de oferta</label>
                            <div class="col-sm-12">
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Tipo de oferta</label>
                            <div class="col-sm-12">
                                {{ Form::select('type', ["reservacion" => "Reservacion", "amenidades" => "Amenidades"],null, ['class' => 'form-control']) }}
                            </div>
                        </div>


                        <div id="reservacion">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Porcentaje de descuento de oferta</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">%</span>
                                        {{ Form::number('reservacion_percent_deal', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="amenidades">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Amenidad(es) a incluir</label>
                                <div class="col-sm-12">
                                    {{ Form::textarea('amenidades_include', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Fecha de disponibilidad</label>
                            <div class="col-sm-2">
                                {{ Form::text('date_start_deal', date("d/m/Y"), ['class' => 'form-control']) }}
                            </div>
                            <div class="col-sm-2">
                                {{ Form::text('date_finish_deal', date("d/m/Y"), ['class' => 'form-control']) }}
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
    {{ Html::script('/back/js/dashboard/catalog/offers/create.js')  }}
@stop
