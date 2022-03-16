@php
    $root = "https://www.pricepond.com.au/merchant_image/";
@endphp
<div class="container mt-5">
    <center>
        <h1 class="py-5">
            DISCOVER THE BEST DEALS ON PRICEPOND...
        </h1>
    </center>
    <div class="row mt-5">
        @foreach ($data as $d)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="blocks">
                    <a href="
                    @if($d->URL != NULL && $d->URL != "")
                        {{ $d->URL }}
                    @else
                        {{ $d->shop_url }}
                    @endif
                    ">
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
                    </a>
                </div>
                <br>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">
        {!! $data->appends(Request::except('page'))->links() !!}
    </div>
</div>