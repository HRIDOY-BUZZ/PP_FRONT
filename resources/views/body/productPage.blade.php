@php
    $img_root = "https://www.pricepond.com.au/merchant_image/";
@endphp
<div class="container">
    <div class="row">
        <div class="col-12">
            @include('chunks.productDetails')
        </div>
        <div class="col-lg-2">
            <div >
                <div class="search-sidebar">
                    <form action="" class="form-control my-3 d-lg-block d-none">
                        <label for="" class="fw-bold">Categories</label>
                        <div class="sidebar-cats ms-2">
                            <a href="">Notebooks</a>
                            <a href="">Macbooks</a>
                            <a href="">Gaming Laptops</a>
                            <a href="">Laptop Accessories</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-10">
                </div>
            </div>
            <div>
                @include('chunks.relatedProducts')
            </div>
        </div>
    </div>
</div>