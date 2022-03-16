@extends('layouts.basic')
@section('title')
PricePond | Contact Us
@endsection

@section('extra-head')
<link rel="stylesheet" href="{{ asset('css/contact_styles.css') }}">
@endsection

@section('content')

<section id="search-result" class="mt-5">
    @include('body.contactBody')
</section>
@endsection