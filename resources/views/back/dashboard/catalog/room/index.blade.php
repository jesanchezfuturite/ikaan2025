@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Habitaciones
@stop

{{-- Content Title --}}
@section('contentTitle')
    Catálogo de Habitaciones
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{ url('cms/dashboard/catalogo/habitaciones/create') }}" class="btn btn-info"><i class="icofont icofont-plus-circle"></i> Nueva habitación</a>
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
                                <th>Habitación</th>
                                <th>Imagen principal</th>
                                <th>Capacidad de personas</th>
                                <th>Precio Sencilla</th>
                                <th>Precio Doble</th>
                                <th>Oferta incluida</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$item->name}}</td>
                                    <td><img src="{{ url($item->principal_photo) }}" style="width: 100%; max-width: 250px;" /></td>
                                    <td>{{$item->maximum_people}}</td>
                                    <td>$ {{ number_format($item->price_sencilla, 2, ".", ",")  }}</td>
                                    <td>$ {{ number_format($item->price_doble, 2, ".", ",")  }}</td>
                                    <td>
                                        @if($item->get_deal != null)
                                            {{ $item->get_deal["name"] }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{URL::to('cms/dashboard/catalogo/habitaciones/edit/'.base64_encode($item->id))}}" class="btn btn-warning"><i class="icofont icofont-pencil"></i>Editar</a>

{{--                                        <a href="{{URL::to('cms/dashboard/catalogo/habitaciones/delete/'.base64_encode($item->id))}}" class="btn btn-danger btn-delete" data-name='{{$item->category_id}}'><i class="icofont icofont-trash"></i>Borrar</a>--}}
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
