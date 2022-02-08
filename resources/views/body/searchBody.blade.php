<div class="container">
    <div class="row">
        <div class="col-lg-2">
            <div >
                <div class="search-sidebar">
                    <form action="" method="GET" class="form-control my-3">
                        <input type="text" name="q" value="{{ $query }}" hidden>
                        <label for="price" class="fw-bold">Price Range:</label>
                        {{-- <div class="search-radio ms-2">
                            <input type="radio" name="price" id="price1" value="90">
                            <label for="price1">Up to $90</label><br>
                            <input type="radio" name="price" id="price2" value="400">
                            <label for="price2">$90 to $400</label><br>
                            <input type="radio" name="price" id="price3" value="900">
                            <label for="price3">$400 to $900</label><br>
                            <input type="radio" name="price" id="price4" value="1500">
                            <label for="price4">$900 to $1,500</label><br>
                            <input type="radio" name="price" id="price5" value="1500+">
                            <label for="price5">Over $1,500</label><br>
                        </div> --}}
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-4">
                                <input type="number" name="min" id="min" min="1" class="form-control" placeholder="$ Min">
                            </div>
                            <div class="col-lg-6 col-md-4 col-4">
                                <input type="number" name="max" id="max" min="1" class="form-control" placeholder="$ Max">
                            </div>
                            <div class="col-lg-12 col-md-4 col-4">
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
                            <input type="text" name="q" value="{{ $query }}" hidden>
                            <select name="relevance" id="relevance" class="form-select" onchange="submitform()">
                                <option value="BestMatch">Best Match</option>
                                <option value="Low2High">Price: Low to High</option>
                                <option value="High2Low">Price: High to Low</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <h6>Showing search result for query: <b>{{ $query }}</b></h6>
        </div>
    </div>
</div>