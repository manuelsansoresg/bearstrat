@extends('adminlte::page')

@section('title', 'Secciones')
@section('content_header')
    <section class="content-header">
        <h1>
            Secciones
            <small>Lista</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Secciones</li>
        </ol>
    </section>
@stop

@section('content')
@section('content')
    <div class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Secciones</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div>
                        <a href="/admin/section/create" class="btn btn-app pull-right">
                            <i class="fa fa-plus"></i> Nuevo
                        </a>
                    </div>
                    <div class="col-md-12">
                        @include('flash::message')
                    </div>
                    <table id="blogs" class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>seccion</th>
                            <th>contenido-eng</th>
                            <th>contenido-esp</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($sections as $section)
                                <td>{{ $section->id }}</td>
                                <td>{{ $section->section }}</td>
                                <td> {!! Str::limit(strip_tags($section->content_esp), 300 )!!} </td>
                                <td> {!! Str::limit(strip_tags($section->content_eng), 300 )!!} </td>

                                <td>
                                    {{ Form::open(['route' => ['section.destroy', $section->id ],'class' => 'form-inline', 'method' => 'DELETE' ])}}
                                    <a href="{{route('section.edit', $section->id)}}" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                                    <button onclick="return confirm('¿Deseas eliminar el blog?')" class="btn btn-danger"> <i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                    {{ Form::close() }}
                                </td>
                            @endforeach
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/app_admin.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/plugins/datatable/js/responsive.js') }}"></script>
    <script>
        $(function () {

            $('#blogs').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
                "scrollX": true
            })
        })
    </script>
@stop
