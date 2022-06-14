@extends('layouts.basic')
@section('title')
PricePond | Home
@endsection

@section('extra-head')
{{-- SLICK CSS --}}
<link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
<link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">

{{-- Custom CSS Files --}}
<link rel="stylesheet" href="{{ asset('css/homeProducts.css') }}">
@endsection

@section('content')
<section id="banner-sec" class="container mt-5 pt-5">
    @include('chunks.banner')
</section>
<section id="brands-sec" class="container my-5">
    @include('chunks.brands')
</section>

<section id="home-products" class="my-5">
    @include('body.homeProducts')
</section>
@endsection

@section('extra-foot')
{{-- SLICK JS --}}
<script src="{{ asset('slick/slick.min.js') }}"></script>

{{-- Custom JS Files --}}
<script src="{{ asset('js/carousel.js') }}"></script>
@endsection