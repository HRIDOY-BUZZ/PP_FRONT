@extends('layouts.basic')
@section('title')
PricePond | View Product
@endsection

@section('extra-head')
<link rel="stylesheet" href="{{ asset('css/searchPage.css') }}">
<link rel="stylesheet" href="{{ asset('css/productPage.css') }}">
@endsection

@section('content')

<section id="search-result" class="mt-5">
    @include('body.productPage')
</section>
@endsection