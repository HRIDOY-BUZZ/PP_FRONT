@php
    $root = "https://www.pricepond.com.au/merchant_image/";
@endphp
<div class="container mt-5">
    <center>
        <h1><b>DISCOVER THE BEST DEALS ON PRICEPOND...</b></h1>
    </center>
    <div class="row mt-5">
        @foreach ($data as $d)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="blocks">
                    <div class="card">
                        <div class="card-img-top">
                            <span>
                                <img src="{{ $root.$d->Image }}" alt="{{ $d->shop_name }}">
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3>
                                    @if(strlen($d->shop_name)>12)
                                        {{ substr($d->shop_name,0,12) }}...
                                    @else
                                        {{ $d->shop_name }}
                                    @endif
                                </h3>
                                @if($d->discount_type == 'percent')
                                    <span class="coupon percent">{{ $d->discount }}% OFF</span>
                                @elseif($d->discount_type == 'cash')
                                    <span class="coupon shipping">FREE SHIPPING</span>
                                @endif
                            </div>
                            <p class="card_text">
                                {{ $d->title }}
                            </p>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        @endforeach
    </div>
</div>