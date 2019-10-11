@extends('layouts.default')

@section('content')
<div class="thankyou">
    <div class="container">
        <div class="row">
            <div class="col-12 thankyou__content shadow text-center text-md-left">
                <div class="thankyou__title">
                    {!! trans('contacto.gracias_title') !!}
                </div>
                <div class="thankyou__subtitle">
                    {!! trans('contacto.gracias_title2')  !!}
                </div>
                <div class="thankyou__text mt-3 mt-md-0">
                    {!! trans('contacto.gracias_description') !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
