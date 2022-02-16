@php
    $root = "https://www.pricepond.com.au/prod_img/";
@endphp

<div class="container">
    <h6>Showing search result for query: <b>{{ $query }}</b></h6>
    <p>
        <div class="row">
            @foreach ($data as $d)
                <div class="col-lg-3 py-3">
                    <div class="card single-product">
                        <div class="product-head">
                            <a href="{{ $d->URL }}">
                                <div class="product-image card-img-top">
                                    @if (isset($d->Image) && $d->Image != null && $d->Image!="")
                                        <img src="{{ $root.$d->Shop."/".$d->Image }}">
                                    @else
                                        <img src="{{ $d->ImageURL }}">
                                    @endif
                                </div>
                            </a>
                            <div class="container product-title pb-3">
                                <a href="{{ $d->URL }}">
                                    <p class="">{{ substr($d->Name,0,42) }}</p>
                                </a>
                            </div>
                        </div>
                        <hr class="product-hr">
                        <div class="card-body product-details">
                            <div class="product-price">
                                <p class="price-amount">
                                    {{ $d->Price }}
                                    <span class="currency"> AUD </span></p>
                            </div>
                            <div class="shop-name">
                                <p>{{ substr($d->shop_name,0,22) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </p>
</div>