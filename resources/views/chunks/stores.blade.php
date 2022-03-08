<div id="stores">
    <div class="tabs-header">
        <div class="container">
            <div class="text-center">
                <h2>Top Viewed Stores</h2>
            </div>
        </div>
    </div>
    <div class="products-body">
        <section class="slider stores">
            @foreach ($stores as $d)
                <div class="store-div">
                    <a href="{{ route('store', [urlencode($d->shop_name)]) }}">
                        <div class="card">
                            <div class="card-img-top">
                                <span>
                                    <img src="{{ $root2.$d->Image }}" alt="{{ $d->shop_name }}">
                                </span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $d->shop_name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </section>
    </div>
</div>