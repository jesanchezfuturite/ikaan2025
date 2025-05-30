@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Prospectos
@stop

{{-- Content Title --}}
@section('contentTitle')
    Catálogo de Prospectos
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{ url('cms/dashboard/prospectos/create') }}" class="btn btn-info"><i class="icofont icofont-plus-circle"></i> Prospectos</a>
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
                                <th>Prospecto</th>
                                <th>Fecha de cumpleaños</th>
                                <th>Fecha de aniversario</th>
                                <th>Edad</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>Lealtad</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($prospectos as $prospectos)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$prospectos->prospecto}}</td>
                                    <td>{{$prospectos->fech_cumple}}</td>
                                    <td>{{$prospectos->fech_aniv}}</td>
                                    <td>{{$prospectos->edad}}</td>
                                    <td>{{$prospectos->correo}}</td>
                                    <td>{{$prospectos->telefono}}</td>
                                    <td>{{$prospectos->id_lealtad}}</td>
                                    <td>
                                        <a href="{{URL::to('cms/dashboard/prospectos/edit/'.base64_encode($prospectos->id))}}" class="btn btn-warning"><i class="icofont icofont-pencil"></i>Editar</a>
                                        
                                        <a href="{{URL::to('cms/dashboard/prospectos/delete/'.base64_encode($prospectos->id))}}" class="btn btn-danger btn-delete"><i class="icofont icofont-trash"></i>Borrar</a>
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
