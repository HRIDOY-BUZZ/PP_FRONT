@php
    $img_root = "https://www.pricepond.com.au/prod_img/";
@endphp
<div class="container">
    <div class="row">
        <div class="col-12">
            
        </div>
        <div class="col-lg-2">
            <div >
                <div class="search-sidebar">
                    <form action="" method="GET" class="form-control my-3">
                        <label for="price" class="fw-bold">Price Range:</label>
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-4 pe-1">
                                <input type="number" name="min" id="min" min="0" class="form-control" placeholder="$ Min" value="">
                            </div>
                            <div class="col-lg-6 col-md-4 col-4 ps-1">
                                <input type="number" name="max" id="max" min="1" class="form-control" placeholder="$ Max" value="">
                            </div>
                            <div class="col-lg-12 col-md-4 col-4 py-2">
                                <button type="submit" class="btn btn-light form-control">Search</button>
                            </div>
                        </div>
                    </form>
                    <form action="" class="form-control my-3 d-lg-block d-none">
                        <center>
                            <label for="" class="fw-bold">
                                Product Types
                            </label>
                        </center>
                        <div class="sidebar-cats ms-2">
                            {{-- @foreach ($types as $t)
                                <a href="">
                                    
                                </a>
                            @endforeach --}}
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
                            <select name="relevance" id="relevance" class="form-select" onchange="submitform()">
                                <option value="b" 
                                    @if($rel == 'b') 
                                        {{ "selected" }} 
                                    @endif
                                >
                                    Best Match
                                </option>
                                <option value="lh" 
                                    @if($rel == 'lh') 
                                        {{ "selected" }} 
                                    @endif
                                >
                                    Price: Low to High
                                </option>
                                <option value="hl" 
                                    @if($rel == 'hl') 
                                        {{ "selected" }} 
                                    @endif
                                >
                                    Price: High to Low
                                </option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                @include('chunks.catProducts')
            </div>
        </div>
    </div>
</div>