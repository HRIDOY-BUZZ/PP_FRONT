<div class="container">
    <div class="row">
        <div class="col-lg-2">
            <div >
                <div class="search-sidebar">
                    <form action="" method="GET" class="form-control my-3">
                        <input type="text" name="q" value="{{ $query }}" hidden>
                        <label for="price" class="fw-bold">Price Range:</label>
                        <div class="search-radio ms-2">
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
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <input type="number" name="max" id="min" min="1" class="form-control" placeholder="$ Min">
                            </div>
                            <div class="col-6">
                                <input type="number" name="max" id="max" min="1" class="form-control" placeholder="$ Max">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-light">Search</button>
                    </form>
                    <form action="" class="form-control my-3">
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
            <h1>{{ $query }}</h1>
        </div>
    </div>
</div>