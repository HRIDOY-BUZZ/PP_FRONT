<section class="container">
    <div id="brands">
        <div class="products-body">
            <section class="slider stores">
                @for ($i=1;$i<12;$i++)
                    <div class="store-div">
                        <div class="single-product">
                            <div class="product-image">
                                <img src="{{ asset('images/stores/nike.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="store-div">
                        <div class="single-product">
                            <div class="product-image">
                                <img src="{{ asset('images/stores/puma.jpg') }}">
                            </div>
                        </div>
                    </div>
                @endfor
            </section>
        </div>
    </div>
</section>