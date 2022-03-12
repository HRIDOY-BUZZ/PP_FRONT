{{-- @foreach ($rdata as $d)
    {{ print_r($d) }}
    {{ "<br><br>" }}
@endforeach --}}

@php
    $root = "https://www.pricepond.com.au/prod_img/";
@endphp

<div class="container px-0">
    <h4>PRODUCTS YOU MAY ALSO LIKE:</h4>
    <p>
        <div class="row">
            @foreach ($rdata as $d)
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 p-8r">
                    <div class="card single-product">
                        <div class="product-head">
                            <a href="{{ $d->URL }}">
                                <div class="product-image card-img-top">
                                    @if (isset($d->Image) && $d->Image != null && $d->Image!="")
                                        @if($d->Image == "NO")
                                            <img src="{{ $root."no-image.jpg" }}">
                                        @else
                                            <img src="{{ $root.$d->Shop."/".$d->Image }}">
                                        @endif
                                    @else
                                        <img src="{{ $d->ImageURL }}">
                                    @endif
                                </div>
                            </a>
                            <div class="container product-title pt-2">
                                <a href="{{ $d->URL }}">
                                    <p class="mb-2">
                                        @if(strlen($d->Name)>40)
                                            {{ substr($d->Name,0,40)."..." }}
                                        @else
                                            {{ $d->Name }}
                                        @endif
                                    </p>
                                </a>
                            </div>
                            <div class="container product-desc pb-2">
                                <p style="text-align:justify">
                                    @if(strlen($d->Description)>100)
                                        {{ substr($d->Description,0,100)."..." }}
                                    @elseif (strlen($d->Description)<1)
                                        {{ substr($d->Name,0,100)."..." }}
                                    @else
                                        {{ $d->Description."..." }}
                                    @endif
                                    <a href="{{ url('product/'.$d->id.'/'.urlencode($d->Name)) }}">More Info</a>
                                </p>
                            </div>
                        </div>
                        <hr class="product-hr">
                        <div class="card-body product-details">
                            <div class="product-price">
                                <p class="price-amount">
                                    {{ $d->Price }}
                                    <span class="currency"> AUD </span>
                                </p>
                            </div>
                            <div class="shop-name">
                                <p><a href="{{ url('store/'.$d->Shop.'/'.urlencode($d->shop_name)) }}">{{ substr($d->shop_name,0,30) }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </p>
</div>

<div class="d-flex justify-content-center mt-5">
    {!! $rdata->appends(Request::except('page'))->links() !!}
</div>