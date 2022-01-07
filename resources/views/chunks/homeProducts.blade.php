<div id="new-launches">
    <div class="tabs-header">
        <div class="container">
            <h2>New Launches {{ date('Y') }}</h2>
            <div class="tab-links">

            </div>
        </div>
    </div>
    <div class="products-body">
        <section class="center slider">
            @for ($i=1;$i<10;$i++)
            {
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
                        <div class="stars">
                            @for ($s=0;$s<4;$s++)
                                <i class="fas fa-star active-star"></i>
                            @endfor
                            <i class="fas fa-star inactive-star"></i>
                            <span class="count">04</span>
                        </div>
                        <div class="product-price">
                            <p class="price-amount"><span class="currency">$</span>599.60</p>
                        </div>
                    </div>
                </div>
            }
                
            @endfor
        </section>
    </div>