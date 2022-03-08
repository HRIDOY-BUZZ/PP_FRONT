@php
    $img_root = "https://www.pricepond.com.au/merchant_image/";
@endphp
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="store-banner py-3 mt-3 mb-4">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="store-img">
                                <img src="{{ $img_root.$shop->Image }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-8 col-sm-6 col-6">
                            <h2 class="text-dark">{{ $shop->shop_name }}</h2>
                            <p><b>Shop ID: </b>{{ $shop->shop_id }}</p>
                            <p><b>Shop Location: </b>{{ $shop->shop_street }}</p>
                            <p><b>Total Products: </b>{{ $count }}</p>
                            <p><a href="{{ $shop->shop_url }}" target="_blank">
                                    <b>
                                        Visit Shop 
                                        <i class="fal fa-share-square"></i>
                                    </b>
                                </a>
                            </p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <p style="text-align: justify">
                                @if(strlen($shop->introductiontext)>0)
                                    <b>ABOUT: </b>{{ $shop->introductiontext }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div >
                <div class="search-sidebar">
                    <form action="" method="GET" class="form-control my-3">
                        <input type="text" name="q" value="{{ $shop->shop_id }}" hidden>
                        <label for="price" class="fw-bold">Price Range:</label>
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-4 pe-1">
                                <input type="number" name="min" id="min" min="0" class="form-control" placeholder="$ Min" value="{{ $min }}">
                            </div>
                            <div class="col-lg-6 col-md-4 col-4 ps-1">
                                <input type="number" name="max" id="max" min="1" class="form-control" placeholder="$ Max" value="{{ $max }}">
                            </div>
                            <div class="col-lg-12 col-md-4 col-4 py-2">
                                <button type="submit" class="btn btn-light form-control">Search</button>
                            </div>
                        </div>
                    </form>
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
                    <div class="search-div-1 w-100">            
                        <div class="search-div">
                            <div id="custom-search-input" class="w-100 mt-3 ms-0">
                                <form action="" method="GET">
                                    <div class="input-group col-md-12">
                                        <input type="text" name="q" class="search-query form-control" 
                                        placeholder="Search Items of {{ $shop->shop_name }}. . ." 
                                        value = "@if(isset($query) && $query!=NULL) {{ $query }} @endif" required>
                                        <span class="input-group-btn">
                                            <button class="btn btn-danger" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="relevance-sort mt-2">
                        <form name="relevance" class="form-control" action="" method="GET">
                            <input type="text" name="q" value="{{ $shop->shop_id }}" hidden>
                            <select name="relevance" id="relevance" class="form-select" onchange="submitform()">
                                <option value="b" @if($rel == 'b') {{ "selected" }} @endif>Best Match</option>
                                <option value="lh" @if($rel == 'lh') {{ "selected" }} @endif>Price: Low to High</option>
                                <option value="hl" @if($rel == 'hl') {{ "selected" }} @endif>Price: High to Low</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                @include('chunks.storeProducts')
            </div>
        </div>
    </div>
</div>