@php
    $root = "https://www.pricepond.com.au/prod_img/";
    $root2 = "https://www.pricepond.com.au/merchant_image/";
@endphp
<section class="container px-0">
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
                            <p>{{ substr($d->shop_name,0,24) }}</p>
                        </div>
                        <hr class="product-hr">
                        <div class="product-details">
                            <div class="product-title">
                                <a href="{{ $d->URL }}">
                                    <p class="">{{ $d->Name }}</p>
                                </a>
                            </div>
                            {{-- <div class="stars">
                                @for ($s=0;$s<4;$s++)
                                    <i class="fas fa-star active-star"></i>
                                @endfor
                                <i class="fas fa-star inactive-star"></i>
                                <span class="count">04</span>
                            </div> --}}
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
                            <p>{{ substr($d->shop_name,0,22) }}</p>
                        </div>
                        <hr class="product-hr">
                        <div class="product-details">
                            <div class="product-title">
                                <a href="{{ $d->URL }}">
                                    <p class="">{{ $d->Name }}</p>
                                </a>
                            </div>
                            {{-- <div class="stars">
                                @for ($s=0;$s<4;$s++)
                                    <i class="fas fa-star active-star"></i>
                                @endfor
                                <i class="fas fa-star inactive-star"></i>
                                <span class="count">04</span>
                            </div> --}}
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
                            <p>{{ substr($d->shop_name,0,22) }}</p>
                        </div>
                        <hr class="product-hr">
                        <div class="product-details">
                            <div class="product-title">
                                <a href="{{ $d->URL }}">
                                    <p class="">{{ $d->Name }}</p>
                                </a>
                            </div>
                            {{-- <div class="stars">
                                @for ($s=0;$s<4;$s++)
                                    <i class="fas fa-star active-star"></i>
                                @endfor
                                <i class="fas fa-star inactive-star"></i>
                                <span class="count">04</span>
                            </div> --}}
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
                                                @if(strlen($d->shop_name)>20)
                                                    {{ substr($d->shop_name,0,20)."..." }}
                                                @else
                                                    {{ $d->shop_name }}
                                                @endif
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
                                                        @if(strlen($d->Name)>35)
                                                            {{ substr($d->Name,0,35)."..." }}
                                                        @else
                                                            {{ $d->Name }}
                                                        @endif
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="product-price">
                                                <p class="price-amount mb-0"><span class="currency">$</span>{{ $d->Price }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <hr class="product-hr"> --}}
                            </div>
                        @endforeach
                    </section>
                </div>
                <div class="col-lg-8 col-xs-12 my-5 py-5"  style="background: #efefef">
                    <div class="tabs-header" style="background-color: #ed3a43">
                        <div class="container">
                            <div class="text-center">
                                <h2 class="text-white">Great Deals</h2>
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
                                                                {{ substr($d->shop_name,0,20)."..." }}
                                                            @else
                                                                {{ $d->shop_name }}
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
                                                    <div class="product-price">
                                                        <p class="price-amount"><span class="currency">$</span>{{ $d->Price }}</p>
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

<!-- <section class="container">
    <div id="top-laptops">
        <div class="tabs-header">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h2>Top Laptops</h2>
                    </div>
                    <div class="col-2 tab-view">
                        <a href="#" class="float-end"><button class="btn btn-view px-3 py-2">View All</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-body">
            <section class="center slider">
                @for ($i=1;$i<10;$i++)
                    <div class="single-product">
                        <div class="product-image">
                            <img src="https://images.getprice.com.au/products/MacBook%20Air%2013%20inch.jpg">
                        </div>
                        <div class="shop-name">
                            <p>TECHRADAR</p>
                        </div>
                        <hr class="product-hr">
                        <div class="product-details">
                            <div class="product-title">
                                <p class="">Apple MacBook Air 2017 13 inch</p>
                            </div>
                            {{-- <div class="stars">
                                @for ($s=0;$s<4;$s++)
                                    <i class="fas fa-star active-star"></i>
                                @endfor
                                <i class="fas fa-star inactive-star"></i>
                                <span class="count">04</span>
                            </div> --}}
                            <div class="product-price">
                                <p class="price-amount"><span class="currency">$</span>1692.00</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </section>
        </div>
    </div>
    
    <div id="top-smartphones">
        <div class="tabs-header">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h2>Top Smartphones</h2>
                    </div>
                    <div class="col-2 tab-view">
                        <a href="#" class="float-end"><button class="btn btn-view px-3 py-2">View All</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-body">
            <section class="center slider">
                @for ($i=1;$i<10;$i++)
                    <div class="single-product">
                        <div class="product-image">
                            <img src="https://images.getprice.com.au/products/Apple%20iPhone%2013%20mini.jpg">
                        </div>
                        <div class="shop-name">
                            <p>TECHRADAR</p>
                        </div>
                        <hr class="product-hr">
                        <div class="product-details">
                            <div class="product-title">
                                <p class="">Apple iPhone 13 mini</p>
                            </div>
                            {{-- <div class="stars">
                                @for ($s=0;$s<4;$s++)
                                    <i class="fas fa-star active-star"></i>
                                @endfor
                                <i class="fas fa-star inactive-star"></i>
                                <span class="count">04</span>
                            </div> --}}
                            <div class="product-price">
                                <p class="price-amount"><span class="currency">$</span>1649.00</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </section>
        </div>
    </div>
    
    <div id="top-printers">
        <div class="tabs-header">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h2>Top Printers</h2>
                    </div>
                    <div class="col-2 tab-view">
                        <a href="#" class="float-end"><button class="btn btn-view px-3 py-2">View All</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-body">
            <section class="center slider">
                @for ($i=1;$i<10;$i++)
                    <div class="single-product">
                        <div class="product-image">
                            <img src="https://images.getprice.com.au/products/EpsonEcoTankET4700.jpg">
                        </div>
                        <div class="shop-name">
                            <p>DICK SMITH</p>
                        </div>
                        <hr class="product-hr">
                        <div class="product-details">
                            <div class="product-title">
                                <p class="">Epson EcoTank ET4700</p>
                            </div>
                            {{-- <div class="stars">
                                @for ($s=0;$s<4;$s++)
                                    <i class="fas fa-star active-star"></i>
                                @endfor
                                <i class="fas fa-star inactive-star"></i>
                                <span class="count">04</span>
                            </div> --}}
                            <div class="product-price">
                                <p class="price-amount"><span class="currency">$</span>528.78</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </section>
        </div>
    </div>
    
    <div id="top-tv">
        <div class="tabs-header">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h2>Top Televisions</h2>
                    </div>
                    <div class="col-2 tab-view">
                        <a href="#" class="float-end"><button class="btn btn-view px-3 py-2">View All</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-body">
            <section class="center slider">
                @for ($i=1;$i<10;$i++)
                    <div class="single-product">
                        <div class="product-image">
                            <img src="https://demo2.drfuri.com/martfury12/wp-content/uploads/sites/53/2013/06/18a-300x300.jpg">
                        </div>
                        <div class="shop-name">
                            <p>ROBERT'S STORE</p>
                        </div>
                        <hr class="product-hr">
                        <div class="product-details">
                            <div class="product-title">
                                <p class="">Samsung UHD TV 24 inch</p>
                            </div>
                            {{-- <div class="stars">
                                @for ($s=0;$s<4;$s++)
                                    <i class="fas fa-star active-star"></i>
                                @endfor
                                <i class="fas fa-star inactive-star"></i>
                                <span class="count">04</span>
                            </div> --}}
                            <div class="product-price">
                                <p class="price-amount"><span class="currency">$</span>599.60</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </section>
        </div>
    </div>
    
    <div id="monitors">
        <div class="tabs-header">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h2>Monitors</h2>
                    </div>
                    <div class="col-2 tab-view">
                        <a href="#" class="float-end"><button class="btn btn-view px-3 py-2">View All</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-body">
            <section class="center slider">
                @for ($i=1;$i<10;$i++)
                    <div class="single-product">
                        <div class="product-image">
                            <img src="https://images.getprice.com.au/products/DellS2721HGF.jpg">
                        </div>
                        <div class="shop-name">
                            <p>KOGAN.COM</p>
                        </div>
                        <hr class="product-hr">
                        <div class="product-details">
                            <div class="product-title">
                                <p class="">Dell S2721HGF 27inch LED</p>
                            </div>
                            {{-- <div class="stars">
                                @for ($s=0;$s<4;$s++)
                                    <i class="fas fa-star active-star"></i>
                                @endfor
                                <i class="fas fa-star inactive-star"></i>
                                <span class="count">04</span>
                            </div> --}}
                            <div class="product-price">
                                <p class="price-amount"><span class="currency">$</span>398.99</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </section>
        </div>
    </div>
    
    <div id="refrigerators">
        <div class="tabs-header">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h2>Refrigerators</h2>
                    </div>
                    <div class="col-2 tab-view">
                        <a href="#" class="float-end"><button class="btn btn-view px-3 py-2">View All</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-body">
            <section class="center slider">
                @for ($i=1;$i<10;$i++)
                    <div class="single-product">
                        <div class="product-image">
                            <img src="https://images.getprice.com.au/products/EuromaidESBS563S.jpg">
                        </div>
                        <div class="shop-name">
                            <p>APPLIANCES ONLINE</p>
                        </div>
                        <hr class="product-hr">
                        <div class="product-details">
                            <div class="product-title">
                                <p class="">Euromaid ESBS563S</p>
                            </div>
                            {{-- <div class="stars">
                                @for ($s=0;$s<4;$s++)
                                    <i class="fas fa-star active-star"></i>
                                @endfor
                                <i class="fas fa-star inactive-star"></i>
                                <span class="count">04</span>
                            </div> --}}
                            <div class="product-price">
                                <p class="price-amount"><span class="currency">$</span>1474.00</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </section>
        </div>
    </div>
    
    <div id="washing-machines">
        <div class="tabs-header">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h2>Washing Machines</h2>
                    </div>
                    <div class="col-2 tab-view">
                        <a href="#" class="float-end"><button class="btn btn-view px-3 py-2">View All</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-body">
            <section class="center slider">
                @for ($i=1;$i<10;$i++)
                    <div class="single-product">
                        <div class="product-image">
                            <img src="https://images.getprice.com.au/products/Bosch%20WAW28460AU.jpg">
                        </div>
                        <div class="shop-name">
                            <p>APPLIANCES ONLINE</p>
                        </div>
                        <hr class="product-hr">
                        <div class="product-details">
                            <div class="product-title">
                                <p class="">Bosch WAW28460AU</p>
                            </div>
                            {{-- <div class="stars">
                                @for ($s=0;$s<4;$s++)
                                    <i class="fas fa-star active-star"></i>
                                @endfor
                                <i class="fas fa-star inactive-star"></i>
                                <span class="count">04</span>
                            </div> --}}
                            <div class="product-price">
                                <p class="price-amount"><span class="currency">$</span>1299.00</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </section>
        </div>
    </div>
</section> -->

<section class="container px-0">
    <div id="stores">
        <div class="tabs-header">
            <div class="container">
                <div class="text-center">
                    <h2>Top Viewed Stores</h2>
                </div>
            </div>
        </div>
        <div class="products-body">
            <section class="slider stores">
                @foreach ($stores as $d)
                    <div class="store-div">
                        <div class="single-product">
                            <div class="store-image">
                                <img src="{{ $root2.$d->Image }}">
                            </div>
                            <div class="shop-name">
                                <p>{{ $d->shop_name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
</section>