@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Ofertas
@stop

{{-- Content Title --}}
@section('contentTitle')
    Catálogo de Ofertas
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{ url('cms/dashboard/catalogo/ofertas/create') }}" class="btn btn-info"><i class="icofont icofont-plus-circle"></i> Nueva Oferta</a>
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
                                <th>Nombre de la oferta</th>
                                <th>Incluye</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        @if($item->type == "reservacion")
                                            Descuento del {{ $item->reservacion_percent_deal }}%
                                        @else
                                            Amenidades a incluir:<br> {{ $item->amenidades_include }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{URL::to('cms/dashboard/catalogo/ofertas/edit/'.base64_encode($item->id))}}" is-used="{{ $item->is_used() }}" message-used="La oferta se encuentra asignada a uno o más Habitaciones/Paquetes, al eliminarlo ya no se encontrará disponible." class="btn btn-warning"><i class="icofont icofont-pencil"></i>Editar</a>
                                        <a href="{{URL::to('cms/dashboard/catalogo/ofertas/delete/'.base64_encode($item->id))}}" is-used="{{ $item->is_used() }}" message-used="La oferta se encuentra asignada a uno o más Habitaciones/Paquetes, al eliminarlo ya no se encontrará disponible." class="btn btn-danger btn-delete" data-name='{{$item->category_id}}'><i class="icofont icofont-trash"></i>Borrar</a>
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
