@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Evaluación Servicio
@stop

{{-- Content Title --}}
@section('contentTitle')
    Evaluación Servicio
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
                                <th>Folio</th>
                                <th>Nombre</th>
                                <th>Ingreso</th>
                                <th>Salida</th>
                                <th>Correo</th>
                                <th>Celular</th> 
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reserv as $reserv)
                                <tr>
                                    <td>{{$loop->iteration }}</td>
                                    <td>{{$reserv->cli->nombre_completo}}</td>
                                    <td>{{$reserv->fecha_entrada}}</td>
                                    <td>{{$reserv->fecha_salida}}</td>
                                    <td>{{$reserv->cli->email}}</td>
                                    <td>{{$reserv->cli->celular}}</td>
                                    <td>
                                        <a href="{{URL::to('cms/dashboard/cuestionario/servicio/evaluacion/'.base64_encode($reserv->id))}}" class="btn btn-warning">
                                            Evaluar
                                        </a>
                                    </td>
                                    <td>
                                        @if($reserv->pdf == 1)
                                            <a href="{{URL::to('cms/dashboard/cuestionario/servicio/ver/'.base64_encode($reserv->id))}}" class="btn btn-success">
                                                Ver
                                            </a>
                                        @else
                                        @endif
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
    
    <script type="text/javascript">
        $(function() {
            $('#colorselector').change(function(){
                $('.colors').hide();
                $('#' + $(this).val()).show();
            });
        });
    </script>
@stop
