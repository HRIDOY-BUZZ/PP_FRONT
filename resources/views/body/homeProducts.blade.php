@php
    $root = "https://www.pricepond.com.au/prod_img/";
    $root2 = "https://www.pricepond.com.au/merchant_image/";
@endphp
<section id="homePageProducts" class="container px-0">
    <div id="hottest-deals">
        <div class="tabs-header">
            <div class="container">
                <div class="row">
                    <div class="col-9">
                        <h2>Today's Hottest Deals</h2>
                    </div>
                    <div class="col-3 tab-view">
                        <a href="#" class="float-end"><button class="btn btn-view">View All</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-body">
            <section class="center slider">
                @foreach ($data1 as $d)
                    <div class="single-product">
                        <a href="{{ $d->URL }}">
                            <div class="product-image">
                                @if (isset($d->Image) && $d->Image != null && $d->Image!="")
                                    <img src="{{ $root.$d->Shop."/".$d->Image }}">
                                @else
                                    <img src="{{ $d->ImageURL }}">
                                @endif
                            </div>
                        </a>
                        <div class="shop-name">
                            <p><a href="{{ route('store', [urlencode($d->shop_name)]) }}">{{ substr($d->shop_name,0,24) }}</a></p>
                        </div>
                        <hr class="product-hr">
                        <div class="product-details">
                            <div class="product-title">
                                <a href="{{ $d->URL }}">
                                    <p class="">{{ $d->Name }}</p>
                                </a>
                            </div>
                            <div class="product-price">
                                <p class="price-amount"><span class="currency">$</span>{{ $d->Price }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
    
    <div id="featured-products">
        <div class="tabs-header">
            <div class="container">
                <div class="row">
                    <div class="col-9">
                        <h2>Featured Products</h2>
                    </div>
                    <div class="col-3 tab-view">
                        <a href="#" class="float-end"><button class="btn btn-view">View All</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-body">
            <section class="center slider">
                @foreach ($data2 as $d)
                    <div class="single-product">
                        <a href="{{ $d->URL }}">
                            <div class="product-image">
                                @if (isset($d->Image) && $d->Image != null && $d->Image!="")
                                    <img src="{{ $root.$d->Shop."/".$d->Image }}">
                                @else
                                    <img src="{{ $d->ImageURL }}">
                                @endif
                            </div>
                        </a>
                        <div class="shop-name">
                            <p><a href="{{ route('store', [urlencode($d->shop_name)]) }}">{{ substr($d->shop_name,0,22) }}</a></p>
                        </div>
                        <hr class="product-hr">
                        <div class="product-details">
                            <div class="product-title">
                                <a href="{{ $d->URL }}">
                                    <p class="">{{ $d->Name }}</p>
                                </a>
                            </div>
                            <div class="product-price">
                                <p class="price-amount"><span class="currency">$</span>{{ $d->Price }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
    
    <div id="top-shopping">
        <div class="tabs-header">
            <div class="container">
                <div class="row">
                    <div class="col-9">
                        <h2>Today's Top Shopping</h2>
                    </div>
                    <div class="col-3 tab-view">
                        <a href="#" class="float-end"><button class="btn btn-view">View All</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-body">
            <section class="center slider">
                @foreach ($data3 as $d)
                    <div class="single-product">
                        <a href="{{ $d->URL }}">
                            <div class="product-image">
                                @if (isset($d->Image) && $d->Image != null && $d->Image!="")
                                    <img src="{{ $root.$d->Shop."/".$d->Image }}">
                                @else
                                    <img src="{{ $d->ImageURL }}">
                                @endif
                            </div>
                        </a>
                        <div class="shop-name">
                            <p><a href="{{ route('store', [urlencode($d->shop_name)]) }}">{{ substr($d->shop_name,0,22) }}</a></p>
                        </div>
                        <hr class="product-hr">
                        <div class="product-details">
                            <div class="product-title">
                                <a href="{{ $d->URL }}">
                                    <p class="">{{ $d->Name }}</p>
                                </a>
                            </div>
                            <div class="product-price">
                                <p class="price-amount"><span class="currency">$</span>{{ $d->Price }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
</section>

    <div id="multi-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12 my-5">
                    <section class="slider multi-grid-big mt-0 py-4">
                        @foreach ($data4 as $d)
                            <div class="multi-grid-left single-product">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-6">
                                        <div class="shop-name">
                                            <p>
                                                <a href="{{ route('store', [urlencode($d->shop_name)]) }}">{{ $d->shop_name }}</a>
                                            </p>
                                        </div>
                                        <a href="">
                                            <div class="product-image">
                                                @if (isset($d->Image) && $d->Image != NULL && $d->Image!="")
                                                    <img src="{{ $root.$d->Shop."/".$d->Image }}" alt="{{ $d->Name }}">
                                                @else
                                                    <img src="{{ $d->ImageURL }}" alt="{{ $d->Name }}">
                                                @endif
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-6">
                                        <div class="product-details mt-5">
                                            <div class="product-title">
                                                <a href="">
                                                    <p class="mgbp-name">
                                                        @if(strlen($d->Name)>40)
                                                            {{ substr($d->Name,0,40)."..." }}
                                                        @else
                                                            {{ $d->Name }}
                                                        @endif
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="product-price d-flex flex-wrap">
                                                <p class="price-amount mb-0 pb-0"><span class="currency">$</span>{{ $d->latest_price }}</p>
                                                @if ($d->Price != $d->latest_price)
                                                    <p class="price-old mb-0 pb-0"><del><span class="currency">$</span>{{ $d->Price }}</del></p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <hr class="product-hr"> --}}
                            </div>
                        @endforeach
                    </section>
                </div>
                <div class="col-lg-8 col-xs-12 my-5 py-5"  style="background: #efefef; border-radius: 15px">
                    <div class="container">
                        <div class="tabs-header" style="">
                            <div class="tab-head-text">
                                <h2 class="px-2">Great Deals</h2>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-body">
                        <section class="mt-3 mx-0 slider multi-grid">
                            @foreach ($data4 as $d)
                                <div class="px-0">
                                    <div class="multi-grid-product">
                                        <div class="row mx-1">
                                            <div class="col-5">
                                                @if (isset($d->Image) && $d->Image != NULL && $d->Image!="")
                                                    <img src="{{ $root.$d->Shop."/".$d->Image }}" alt="{{ $d->Name }}">
                                                @else
                                                    <img src="{{ $d->ImageURL }}" alt="{{ $d->Name }}">
                                                @endif
                                            </div>
                                            <div class="col-7">
                                                <div class="product-details">
                                                    <div class="shop-name">
                                                        <p>
                                                            @if(strlen($d->shop_name)>20)
                                                                <a href="{{ route('store', [urlencode($d->shop_name)]) }}">{{ substr($d->shop_name,0,20)."..." }}</a>
                                                            @else
                                                                <a href="{{ route('store', [urlencode($d->shop_name)]) }}">{{ $d->shop_name }}</a>
                                                            @endif
                                                        </p>
                                                    </div>
                                                    <div class="product-title">
                                                        <p class="">
                                                            @if(strlen($d->Name)>35)
                                                                {{ substr($d->Name,0,35)."..." }}
                                                            @else
                                                                {{ $d->Name }}
                                                            @endif
                                                        </p>
                                                    </div>
                                                    <div class="product-price d-flex flex-wrap">
                                                        <p class="price-amount"><span class="currency">$</span>{{ $d->latest_price }}</p>
                                                        @if ($d->Price != $d->latest_price)
                                                            <p class="price-old"><del><span class="currency">$</span>{{ $d->Price }}</del></p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section id="homePageStores" class="container px-0">
    @include('chunks.stores')
</section>