@extends('layouts.basic')
@section('title')
PricePond | Categories
@endsection

@section('extra-head')
<link rel="stylesheet" href="{{ asset('css/categories.css') }}">
@endsection

@section('content')

<section id="search-result" class="mt-5">
    @include('body.cat')
</section>
@endsection