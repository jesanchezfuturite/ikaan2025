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
    <a href="{{ url('cms/dashboard/catalogo/lealtad/create') }}" class="btn btn-info"><i class="icofont icofont-plus-circle"></i> Lealtad</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Categoría de Lealtad</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($lealtad as $lealtad)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$lealtad->categoria}}</td>
                                    <td>
                                        <a href="{{URL::to('cms/dashboard/catalogo/lealtad/edit/'.base64_encode($lealtad->id))}}" is-used="{{ $lealtad->is_used() }}" message-used="La oferta se encuentra asignada a uno o más Habitaciones/Paquetes, al eliminarlo ya no se encontrará disponible." class="btn btn-warning"><i class="icofont icofont-pencil"></i>Editar</a>
                                        <a href="{{URL::to('cms/dashboard/catalogo/lealtad/delete/'.base64_encode($lealtad->id))}}" is-used="{{ $lealtad->is_used() }}" message-used="La oferta se encuentra asignada a uno o más Habitaciones/Paquetes, al eliminarlo ya no se encontrará disponible." class="btn btn-danger btn-delete" data-name='{{$lealtad->category_id}}'><i class="icofont icofont-trash"></i>Borrar</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

{{-- Page JS --}}
@section('pageJS')
    {{ Html::script('back/js/dashboard/simpleTable.js')  }}
@stop
