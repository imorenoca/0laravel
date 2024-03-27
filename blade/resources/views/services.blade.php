@extends('layouts.landing')

@section('title','Services')

@section('content')
    <h1>Servicios</h1>
    <p>Listados de nuestros servicios</p>   
    @component('_components.card')
        @slot('title', 'Service 1')
        @slot('content','lorem ipsum dolor set aimet.')

    @endcomponent
    

@endsection

