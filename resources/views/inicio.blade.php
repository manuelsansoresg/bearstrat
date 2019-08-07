@extends('layouts.app')

@section('content')
    <li><a href="{{ url('lang', ['en']) }}" class="text-white">En</a></li>
    <li><a href="{{ url('lang', ['es']) }}" class="text-white">Es</a></li>
    <p class="text-white">{{ trans('home.video-title') }}</p>
@endsection