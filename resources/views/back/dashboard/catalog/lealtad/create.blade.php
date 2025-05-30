@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Lealtad
@stop

{{-- Content Title --}}
@section('contentTitle')
    Lealtad
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{ url('cms/dashboard/catalogo/lealtad/') }}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    {{ Form::open(['url' => url('cms/dashboard/catalogo/lealtad/store') ]) }}
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Categoría</label>
                            <div class="col-sm-10">
                                {{ Form::text('lealtad', null, ['class' => 'form-control', 'placeholder'=>'Lealtad']) }}
                            </div>
                        </div>
                        <!---->
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
