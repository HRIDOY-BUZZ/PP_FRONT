@extends('layouts.basic')
@section('title')
PricePond | Search
@endsection

@section('extra-head')
<link rel="stylesheet" href="{{ asset('css/searchPage.css') }}">
<link rel="stylesheet" href="{{ asset('css/storePage.css') }}">
@endsection

@section('content')

<section id="search-result" class="mt-5">
    @include('body.storePage')
</section>
@endsection