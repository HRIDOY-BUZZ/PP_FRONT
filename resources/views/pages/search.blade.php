@extends('layouts.basic')
@section('title')
PricePond | Search
@endsection

@section('content')

<section class="mt-5">
    <div class="container">
        <h1>{{ $query }}</h1>
    </div>
</section>
@endsection