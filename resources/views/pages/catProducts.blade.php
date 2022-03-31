@extends('layouts.basic')
@section('title')
PricePond | Category
@endsection

@section('extra-head')
<link rel="stylesheet" href="{{ asset('css/searchPage.css') }}">
<link rel="stylesheet" href="{{ asset('css/catProducts.css') }}">
@endsection

@section('content')

<section id="search-result" class="mt-5">
    @include('body.catsBody')
</section>
@endsection