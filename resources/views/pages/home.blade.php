@extends('layouts.basic')
@section('title')
PricePond | Home
@endsection

@section('content')
<section id="banner-sec" class="container mt-5">
    @include('chunks.banner')
</section>
<section id="brands-sec" class="container my-5">
    @include('chunks.brands')
</section>

<section id="home-products" class="my-5">
    @include('chunks.homeProducts')
</section>
@endsection