@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Paquetes
@stop

{{-- Content Title --}}
@section('contentTitle')
    Reservaciones
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
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
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Tipo de pago</th>
                                <th>Días de<br> reserva</th>
                                <th>Habitación</th>
                                <th>Numero de Personas</th>
                                <th>Total Pagado</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($reserv as $reserv)
                                <tr>
                                    <td>{{$loop->iteration }}</td>
                                    <td>{{$reserv->cli->nombre_completo}}</td>
                                    <td>{{$reserv->cli->email}}</td>
                                    <td>{{$reserv->cli->telefono}}</td>
                                    <td>{{$reserv->tipo_pago}}</td>
                                    <td>{{$reserv->total_noches}}</td>
                                    <td>{{$reserv->habitacion->name}}</td>
                                    <td>{{$reserv->numero_personas}}</td>
                                    <td>{{$reserv->total}}</td>
                                    <td>
                                        <a href="{{URL::to('cms/dashboard/catalogo/reservaciones/folio/'.base64_encode($reserv->id))}}" class="btn btn-warning">
                                            Folio
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{URL::to('cms/dashboard/catalogo/reservaciones/estancia/'.base64_encode($reserv->id))}}" class="btn btn-info">
                                            Estancia
                                        </a>
                                    </td>
                                    <!--<td>
                                        <a href="{{--URL::to('cms/dashboard/catalogo/reservaciones/evaluacion/'.base64_encode($reserv->id))--}}" class="btn btn-warning">
                                            Ver Evaluación
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{--URL::to('cms/dashboard/catalogo/reservaciones/evaluacion/'.base64_encode($reserv->id))--}}" class="btn btn-warning">
                                            Admisión LIS
                                        </a>
                                    </td>-->
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
