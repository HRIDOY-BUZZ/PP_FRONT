@extends('layouts.basic')
@section('title')
PricePond | Home
@endsection

@section('content')
<section id="banner-sec" style="margin-top: 50px">
    @include('chunks.banner')
</section>
<section id="brands-sec" style="margin-top: 50px">
    @include('chunks.brands')
</section>
@endsection