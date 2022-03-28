@php
    $img_root = "https://pricepond.com.au/cat_images/";
    $placeholder = "placeholder.jpg";
@endphp
<div class="container">
    <center>
        <h1 class="pt-5">
            ALL CATEGORIES
        </h1>
    </center>
    <div class="container mt-5">
        <div class="category-div">
            <div class="row">
                @foreach ($data as $d)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="container my-5 single-category">
                            <div class="category-image">
                                <img src="
                                    @if(file_exists($img_root.$d->name.".jpg"))
                                        {{ $img_root.$d->name.".jpg" }}
                                    @else
                                        {{ $img_root.$placeholder }}
                                    @endif
                                " alt="{{ $d->name }}">
                            </div>
                            <div class="category-title py-3">
                                <center>
                                    <h4>{{ $d->name }}</h4>
                                </center>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>