@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Admisión
@stop

{{-- Content Title --}}
@section('contentTitle')
    Admisión
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{ url('cms/dashboard/cuestionario/admision/create') }}" class="btn btn-info"><i class="icofont icofont-plus-circle"></i>Admisión</a>
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
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($admision as $admision)
                                    <tr>
                                        <td>{{$loop->iteration }}</td>
                                        <td>{{$admision->nombre}}</td>
                                        <td>{{$admision->fecha_entrada}}</td>
                                        <td>{{$admision->fecha_salida}}</td>
                                        <td>{{$admision->correo}}</td>
                                        <td>{{$admision->celular}}--{{$admision->telefono}}</td>
                                        <td>
                                            <a href="{{URL::to('cms/dashboard/cuestionario/admision/ver/'.base64_encode($admision->id))}}" class="btn btn-info">
                                                Ver
                                            </a>
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
