@extends('layouts.basic')
@section('title')
PricePond | View Event
@endsection

@section('extra-head')
<link rel="stylesheet" href="{{ asset('css/searchPage.css') }}">
<link rel="stylesheet" href="{{ asset('css/eventPage.css') }}">
@endsection

@section('content')

<section id="search-result" class="mt-5">
    @include('body.eventBody')
</section>
@endsection