
<div class="container">
    <div class="row">
        <div class="col-12">
            {{ $store }}
        </div>
        <div class="col-lg-2">
            <div >
                <div class="search-sidebar">
                    <form action="" method="GET" class="form-control my-3">
                        <input type="text" name="q" value="{{ $store }}" hidden>
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

                </div>
                <div class="col-lg-2">
                    <div class="relevance-sort">
                        <form name="relevance" class="form-control" action="" method="GET">
                            <input type="text" name="q" value="{{ $store }}" hidden>
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