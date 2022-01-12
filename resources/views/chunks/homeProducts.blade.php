<div id="new-launches">
    <div class="tabs-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-12">
                    <h2>New Launches {{ date('Y') }}</h2>
                </div>
                <div class="col-md-2 col-xs-12 tab-view">
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

<div id="hottest-deals">
    <div class="tabs-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-12">
                    <h2>Today's Hottest Deals</h2>
                </div>
                <div class="col-md-2 col-xs-12 tab-view">
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

<div id="featured-products">
    <div class="tabs-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-12">
                    <h2>Featured Products</h2>
                </div>
                <div class="col-md-2 col-xs-12 tab-view">
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

<div id="top-shopping">
    <div class="tabs-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-12">
                    <h2>Today's Top Shopping</h2>
                </div>
                <div class="col-md-2 col-xs-12 tab-view">
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

<div id="price-drops">
    <div class="tabs-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-12">
                    <h2>Top Price Drops</h2>
                </div>
                <div class="col-md-2 col-xs-12 tab-view">
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

<div id="top-laptops">
    <div class="tabs-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-12">
                    <h2>Top Laptops</h2>
                </div>
                <div class="col-md-2 col-xs-12 tab-view">
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
                <div class="col-md-10 col-xs-12">
                    <h2>Top Smartphones</h2>
                </div>
                <div class="col-md-2 col-xs-12 tab-view">
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
                <div class="col-md-10 col-xs-12">
                    <h2>Top Printers</h2>
                </div>
                <div class="col-md-2 col-xs-12 tab-view">
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
                <div class="col-md-10 col-xs-12">
                    <h2>Top Televisions</h2>
                </div>
                <div class="col-md-2 col-xs-12 tab-view">
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

<div id="top-monitors">
    <div class="tabs-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-12">
                    <h2>Top Monitors</h2>
                </div>
                <div class="col-md-2 col-xs-12 tab-view">
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