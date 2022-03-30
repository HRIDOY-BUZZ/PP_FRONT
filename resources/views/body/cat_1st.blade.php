@php
    $img_root = "https://pricepond.com.au/cats/images/";
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
                                    @if($d->category_image == NULL || $d->category_image == '')
                                        {{ $img_root.$placeholder }}
                                    @else
                                        {{ $img_root.$d->category_image }}
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