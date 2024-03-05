@extends('layout.lading')

@section('title','index')

@section('content')

    @component('_components.card')
        @slot('title','Este es el titulo')

        @slot('content','Este es el contenido del card')
        
    @endcomponent

    <h1>Este es el contenido del index</h1>

@endsection