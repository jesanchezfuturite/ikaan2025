@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Paquetes
@stop

{{-- Content Title --}}
@section('contentTitle')
    Catálogo de Paquetes
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{ url('cms/dashboard/catalogo/paquetes/create') }}" class="btn btn-info"><i class="icofont icofont-plus-circle"></i> Nuevo Paquete</a>
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
                                <th>Paquetes</th>
                                <th>Imagen principal</th>
                                <th>Capacidad<br>de personas</th>
                                <th>Total<br> de noches</th>
                                <th>CheckIn / CheckOut</th>
                                <th>Precio <br>Sencilla</th>
                                <th>Precio <br>Doble</th>
                                <th>Oferta <br>incluida</th>
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
                                    <td>{{$item->nights}}</td>
                                    <td>
                                        @if($item->checkin != null)
                                            {{ date("H:i", strtotime($item->checkin))  }} / {{date("H:i", strtotime($item->checkout))}}
                                        @endif
                                    </td>
                                    <td>$ {{ number_format($item->price_sencilla, 2, ".", ",")  }}</td>
                                    <td>$ {{ number_format($item->price_doble, 2, ".", ",")  }}</td>
                                    <td>
                                        @if($item->get_deal != null)
                                            {{ $item->get_deal["name"] }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{URL::to('cms/dashboard/catalogo/paquetes/edit/'.base64_encode($item->id))}}" class="btn btn-warning"><i class="icofont icofont-pencil"></i>Editar</a>

{{--                                        <a href="{{URL::to('cms/dashboard/catalogo/paquetes/delete/'.base64_encode($item->id))}}" class="btn btn-danger btn-delete" data-name='{{$item->category_id}}'><i class="icofont icofont-trash"></i>Borrar</a>--}}
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
