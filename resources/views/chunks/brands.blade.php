<section class="container px-0">
    <div id="brands">
        <div class="products-body">
            <section class="slider brands">
                @for ($i=1;$i<6;$i++)
                    <div class="brand-div">
                        <div class="single-product">
                            <div class="brand-image">
                                <img src="{{ asset('images/stores/nike.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="brand-div">
                        <div class="single-product">
                            <div class="brand-image">
                                <img src="{{ asset('images/stores/puma.jpg') }}">
                            </div>
                        </div>
                    </div>
                @endfor
            </section>
        </div>
    </div>
</section>