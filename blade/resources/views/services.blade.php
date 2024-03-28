@extends('layouts.landing')

@section('title', 'Services')

@section('content')
    <h1>Servicios</h1>
    <div class="cards">
        @component('_components.card')
            @slot('title', 'Service 1')
            @slot('content', 'lorem ipsum dolor set aimet.')
        @endcomponent
        @component('_components.card')
            @slot('title', 'Service 2')
            @slot('content', 'Esta es la descripción del servicio 2')
        @endcomponent
        @component('_components.card')
            @slot('title', 'Service 3')
            @slot('content', 'Esta es la descripción del servicio 3')
        @endcomponent
    </div>

@endsection
