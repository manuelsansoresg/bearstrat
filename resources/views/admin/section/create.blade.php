@extends('adminlte::page')

@section('title', 'Alta Sección')

@section('content_header')
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote.css') }}">

    <section class="content-header">
        <h1>
            Seccion
            <small>Nuevo</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="/admin/section">Secciones</a></li>
            <li class="active">Nuevo</li>
        </ol>
    </section>
@stop

@section('content')
    <div class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Blog</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @include('flash::message')
                    {{ Form::open(['route' => 'section.store', 'method' => 'POST', 'files' => true]) }}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Seccion</label>
                            <input type="text" class="form-control" id="section" name="section">
                            @if($errors)
                                <span class="text-danger"> {{$errors->first('section')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contenido Español</label>
                            <textarea class="form-control" name="content_esp" id="content_esp" cols="30" rows="50"></textarea>
                            @if($errors)
                                <span class="text-danger"> {{$errors->first('content_esp')}}</span>
                            @endif
                        </div>


                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contenido Ingles</label>
                            <textarea class="form-control" name="content_eng" id="content_eng" cols="30" rows="50"></textarea>
                            @if($errors)
                                <span class="text-danger"> {{$errors->first('content_eng')}}</span>
                            @endif
                        </div>


                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <button class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop

@section('adminlte_js')
    <script src="{{asset('vendor/summernote/summernote.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#content_eng').summernote(
                {
                    height: 200,
                    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
                    //fontNamesIgnoreCheck: ["Campton-Medium", "Campton-Light", 'Campton-Book', 'Campton-ExtraBold', 'Campton-SemiBoldItalic']
                }
            );

            $('#content_esp').summernote(
                {
                    height: 200,
                    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
                    //fontNamesIgnoreCheck: ["Campton-Medium", "Campton-Light", 'Campton-Book', 'Campton-ExtraBold', 'Campton-SemiBoldItalic']
                }
            );
        });

    </script>
@stop
