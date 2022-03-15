@extends('layouts.basic')
@section('title')
PricePond | View Events
@endsection

@section('extra-head')
<link rel="stylesheet" href="{{ asset('css/deals_event.css') }}">
@endsection

@section('content')

<section id="search-result" class="mt-5">
    @include('body.allEventsPage')
</section>
@endsection